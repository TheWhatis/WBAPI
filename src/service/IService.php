<?php
/**
 * Файл с интерфейсом сервиса
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
 * Интерфейс сервиса
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
interface IService
{
    /**
     * Иницилизация сервиса
     *
     * @param string|IClient $tokenOrClient Токен
     */
    public function __construct(string|IClient $tokenOrClient);

    /**
     * Получить тип сервиса
     *
     * @return ServiceType
     */
    public static function getType(): ServiceType;

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
    ): array;
}
