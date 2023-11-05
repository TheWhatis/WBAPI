<?php
/**
 * Файл с трейтом, реализующим
 * интерфейса `IService`
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\Skeleton;

/**
 * Трейт с реализацией
 * интерфейса `IService`
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
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
     * Иницилизация сервиса
     *
     * @param string|IClient $tokenOrClient Токен или клиент
     */
    public function __construct(string|IClient $tokenOrClient)
    {
        if ($tokenOrClient instanceof IClient) {
            $this->client = $tokenOrClient;
            return;
        }

        $this->client = new Client(
            $tokenOrClient, static::getType()
        );
    }

    /**
     * Получить тип сервиса
     * (стандарт или статистика)
     *
     * @return ServiceType
     */
    abstract public static function getType(): ServiceType;

    /**
     * Воспроизвести запрос
     *
     * @param string $method Метод
     * @param string $uri    URI запроса
     * @param array  $data   Данные
     *
     * @return array
     */
    public function request(
        string $method,
        string $uri,
        array $data
    ): array {
        return $this->client->request($method, $uri, $data);
    }
}
