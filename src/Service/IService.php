<?php
/**
 * Файл с интерфейсом сервиса
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

/**
 * Интерфейс сервиса
 *
 * PHP version 8
 *
 * @category Service
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
interface IService
{
    /**
     * Иницилизация сервиса
     *
     * @param IClient $client Клиент
     */
    public function __construct(IClient $client);
}
