<?php
/**
 * Файл с трейтом для установки
 * базового начального
 * uri content/
 *
 * PHP version 8
 *
 * @category Traits
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\Traits;

use Whatis\WBAPI\Permission;
use Whatis\WBAPI\Permissions;

/**
 * Трейт для установки
 * базового начального
 * uri content/
 *
 * PHP version 8
 *
 * @category Traits
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
trait ContentCategory
{
    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function getBaseUri(): string
    {
        return 'content/';
    }

    /**
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    public static function getPermissions(): Permissions
    {
        return new Permissions(Permission::Content);
    }
}
