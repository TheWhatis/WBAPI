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
            $tokenOrClient, static::getType(), static::baseUri()
        );
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function baseUri(): string
    {
        return '';
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
