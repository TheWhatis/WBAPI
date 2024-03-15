<?php
/**
 * Файл с трейтом, реализующим
 * интерфейс `IService`
 *
 * PHP version 8
 *
 * @category Service
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Service;

use Whatis\WBAPI\Http\IClient;
use Whatis\WBAPI\Http\Payload as ClientPayload;
use Whatis\WBAPI\Enums\HttpMethod;
use Whatis\WBAPI\Permissions;

use Whatis\WBAPI\Exceptions\PermissionsDoesNotExistsException;
use InvalidArgumentException;
use BadMethodCallException;
use Throwable;

/**
 * Трейт с реализацией
 * интерфейса `IService`
 *
 * PHP version 8
 *
 * @category Service
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
trait TService
{
    /**
     * Клиент
     *
     * @var IClient
     */
    public readonly IClient $client;

    /**
     * Разрешения сервиса
     *
     * @var Permissions
     */
    public readonly Permissions $permissions;

    /**
     * Иницилизация сервиса
     *
     * @param IClient $client Клиент
     */
    public function __construct(IClient $client)
    {
        $this->client = $client;
        $this->permissions = static::getPermissions();
        $this->validateToken($client->getToken());
    }

    /**
     * Вывести ошибку о том, что у токена
     * недостаточно разрешений для работы
     * этого сервиса
     *
     * @param string $token Токен
     *
     * @return never
     * @throw  PermissionsDoesNotExistsException
     */
    protected function throwNotEnoughPermissions(string $token): never
    {
        $message = 'The token does not have enough rights '
                 . 'to work with this service \'%s\', '
                 . 'Required permissions: %s. Token: \'%s\'';

        throw new PermissionsDoesNotExistsException(
            sprintf(
                $message,
                $this::class,
                $this->permissions->asString(),
                $token
            )
        );
    }

    /**
     * Валидировать токен
     *
     * @param string $token Токен
     *
     * @return void
     * @throw  InvalidArgumentException
     */
    protected function validateToken(string $token): void
    {
        try {
            if (!$this->permissions->hasByToken($token)) {
                $this->throwNotEnoughPermissions($token);
            }
        } catch (InvalidArgumentException $exception) {
            throw new InvalidArgumentException(
                sprintf(
                    $exception->getMessage()
                        . '. Entry service: %s', get_class($this)
                ), $exception->getCode(), $exception
            );
        }
    }

    /**
     * Получить домен для обращения
     *
     * @return string
     */
    public static function domain(): string
    {
        return 'suppliers-api.wildberries.ru';
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return '';
    }

    /**
     * Получить заголовки из Payload
     *
     * @param mixed $payload Полезная нагрузка
     *
     * @return array
     */
    protected function headers(mixed $payload): array
    {
        return is_a($payload, Payload::class)
            ? $payload->headers : [];
    }

    /**
     * Получить параметры из Payload
     *
     * @param mixed $payload Полезная нагрузка
     *
     * @return array
     */
    protected function params(mixed $payload)
    {
        return is_a($payload, Payload::class)
            ? $payload->params : [];
    }

    /**
     * Получить тело запроса из Payload
     *
     * @param mixed $payload Полезная нагрузка
     *
     * @return mixed
     */
    protected function body(mixed $payload): mixed
    {
        return is_a($payload, Payload::class)
            ? $payload->body : $payload;
    }

    /**
     * Воспроизвести запрос
     *
     * @param string|HttpMethod $method  Метод
     * @param string            $path    Путь до запроса
     * @param mixed             $payload Полезная нагрузка запроса
     *
     * @return mixed
     */
    public function request(
        string|HttpMethod $method,
        string $path,
        mixed $payload = null
    ): mixed {
        $response = $this->client->request(
            new ClientPayload(
                HttpMethod::makeFrom($method),
                static::domain(),
                static::basePath() . '/' . $path,
                $this->headers($payload),
                $this->params($payload),
                $this->body($payload)
            )
        );

        $content = $response->getBody()->getContents();
        if (in_array($response->getStatusCode(), [201, 204])) {
            if (trim($content) === '') {
                return true;
            }
        }

        return $this->client->getFormatter()
            ->withContext($response)
            ->decode($content);
    }
}
