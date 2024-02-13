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
     * @param string $token Токен Wildberries
     */
    public function __construct(string $token);

    /**
     * Получить токен
     *
     * @return string
     */
    public function getToken(): string;

    /**
     * Установить форматтер body
     *
     * @param IJsonFormatter $formatter Форматер
     *
     * @return static
     */
    public function withFormatter(IJsonFormatter $formatter): static;

    /**
     * Получить форматер
     *
     * @return IJsonFormatter
     */
    public function getFormatter(): IJsonFormatter;

    /**
     * Установить фабрику запросов
     *
     * @param RequestFactoryInterface $factory Фабрика запросов
     *
     * @return static
     */
    public function withRequestFactory(
        RequestFactoryInterface $factory
    ): static;

    /**
     * Получить фабрику запросов
     *
     * @return RequestFactoryInterface
     */
    public function getRequestFactory(): RequestFactoryInterface;

    /**
     * Выполнить запрос к wb api
     *
     * @param Payload $payload Данные (полезная нагрузка)
     *
     * @return ResponseInterface
     */
    public function request(Payload $payload): ResponseInterface;
}
