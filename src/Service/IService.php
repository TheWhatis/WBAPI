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

use Whatis\WBAPI\Permissions;

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
     * @param string $token Токен
     */
    public function __construct(string $token);

    /**
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    public static function getPermissions(): Permissions;

    /**
     * Воспроизвести запрос
     *
     * @param ...$args Аргументы для запроса Request
     *
     * @return array
     */
    public function request(...$args): array;
}
