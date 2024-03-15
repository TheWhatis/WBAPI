<?php
/**
 * Файл с интерфейсом клиента
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

namespace Whatis\WBAPI\Http;

use Whatis\WBAPI\Formatters\IJsonFormatter;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestFactoryInterface;

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
     * @param string                   $token     Токен wildberries api
     * @param ?IJsomFormatter          $formatter Форматировщик данных
     * @param ?RequestFactoryInterface $factory   Фабрика запросов
     */
    public function __construct(
        string $token,
        ?IJsonFormatter $formatter = null,
        ?RequestFactoryInterface $factory = null
    );

    /**
     * Получить токен
     *
     * @return string
     */
    public function getToken(): string;

    /**
     * Получить форматер
     *
     * @return IJsonFormatter
     */
    public function getFormatter(): IJsonFormatter;

    /**
     * Выполнить запрос к wb api
     *
     * @param Payload $payload Данные (полезная нагрузка)
     *
     * @return ResponseInterface
     */
    public function request(Payload $payload): ResponseInterface;
}
