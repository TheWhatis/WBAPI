<?php
/**
 * Файл с трейтом для установки
 * базового начального
 * uri api/v3/
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

/**
 * Трейт для установки
 * базового начального
 * uri api/v3/
 *
 * PHP version 8
 *
 * @category Traits
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
trait MarketplaceV3Category
{
    use MarketplaceCategory {
        MarketplaceCategory::getBaseUri as private traitBaseUri;
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function getBaseUri(): string
    {
        return static::traitBaseUri() . 'v3/';
    }
}
