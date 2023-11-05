<?php
/**
 * Файл с интерфейсом
 * клиента для wildberries api
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
 * Интерфейс клиента
 * для wildberries api
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
interface IClient
{
    /**
     * Иницилизация клиента
     *
     * @param string      $token Токен Wildberries
     * @param ServiceType $type  Тип сервиса
     */
    public function __construct(string $token, ServiceType $type);

    /**
     * Выполнить запрос к wb api
     *
     * @param string $method Метод
     * @param string $uri    URI запроса
     * @param array  $data   Данные
     * @param array  $query  Данные для uri данных GET
     *
     * @return array
     */
    public function request(
        string $method,
        string $uri,
        array $data = [],
        array $query = []
    ): array;
}
