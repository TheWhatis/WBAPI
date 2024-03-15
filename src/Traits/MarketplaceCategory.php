<?php
/**
 * Файл с трейтом для установки
 * базового начального
 * uri api/
 *
 * PHP version 8
 *
 * @category Traits
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Traits;

use Whatis\WBAPI\Permissions;
use Whatis\WBAPI\Enums\Permission;

/**
 * Трейт для установки
 * базового начального
 * uri api/
 *
 * PHP version 8
 *
 * @category Traits
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
trait MarketplaceCategory
{
    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return 'api/';
    }

    /**
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    public static function getPermissions(): Permissions
    {
        return new Permissions(Permission::Marketplace);
    }
}
