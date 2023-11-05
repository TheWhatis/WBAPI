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
 * @link     https://github.com/TheWhatis/WBApiSkeleton
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
 * @link     https://github.com/TheWhatis/WBApiSkeleton
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
