<?php
/**
 * Файл с трейтом, реализующим
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

namespace Whatis\WBAPI\Service;

use Whatis\WBAPI\Client\IClient;
use Whatis\WBAPI\Exceptions\PermissionsDoesNotExistsException;

use Whatis\WBAPI\Client;
use Whatis\WBAPI\Permissions;

use InvalidArgumentException;

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
    public IClient $client;

    /**
     * Разрешения сервиса
     *
     * @var Permissions
     */
    public Permissions $permissions;

    /**
     * Иницилизация сервиса
     *
     * @param string $token Токен
     *
     * @throw PermissionsDoesNotExistsException
     */
    public function __construct(string $token)
    {
        $this->permissions = static::getPermissions();
        try {
            if (!$this->permissions->hasByToken($token)) {
                $message = 'The token does not have enough rights '
                         . 'to work with this service \'%s\', '
                         . 'Required permissions: %s. Token: \'%s\'';

                throw new PermissionsDoesNotExistsException(
                    sprintf(
                        $message, get_class($this), implode(
                            ', ', array_map(
                                static function ($permission) {
                                    return sprintf(
                                        '\'%s:%s; %s\'',
                                        get_class($permission),
                                        $permission->name,
                                        $permission->value
                                    );
                                }, $this->permissions->get()
                            )
                        ), $token
                    )
                );
            }
        } catch (InvalidArgumentException $exception) {
            throw new InvalidArgumentException(
                sprintf(
                    $exception->getMessage()
                        . '. Entry service: %s', get_class($this)
                ), $exception->getCode(), $exception
            );
        }

        $this->client = new Client(
            $token, static::getDomain(), static::getBaseUri()
        );
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function getBaseUri(): string
    {
        return '';
    }

    /**
     * Получить домен для обращения
     *
     * @return string
     */
    public static function getDomain(): string
    {
        return 'suppliers-api.wildberries.ru';
    }

    /**
     * Воспроизвести запрос
     *
     * @param ...$args Аргументы для запроса Request
     *
     * @return array
     */
    public function request(...$args): array
    {
        return $this->client->request(...$args);
    }
}
