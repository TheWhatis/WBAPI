<?php
/**
 * Файл с интерфейсом
 * клиента для wildberries api
 *
 * PHP version 8
 *
 * @category Client
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Client;

/**
 * Интерфейс клиента
 * для wildberries api
 *
 * PHP version 8
 *
 * @category Client
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
interface IClient
{
    /**
     * Иницилизация клиента
     *
     * @param string $token  Токен Wildberries
     * @param string $domain Домен по которому обращаться
     */
    public function __construct(string $token, string $domain);

    /**
     * Выполнить запрос к wb api
     *
     * @param string $method    Метод
     * @param string $uri       URI запроса
     * @param array  $data      Данные
     * @param array  $query     Данные для uri данных GET
     * @param array  $headers   Доп. заголовки для запроса
     * @param array  $multipart Параметр для передачи файлов
     *
     * @return array
     */
    public function request(
        string $method,
        string $uri,
        array $data = [],
        array $query = [],
        array $headers = [],
        array $multipart = []
    ): array;
}
