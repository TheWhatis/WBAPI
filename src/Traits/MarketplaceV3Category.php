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
 * @link     https://github.com/TheWhatis/WBAPI
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
 * @link     https://github.com/TheWhatis/WBAPI
 */
trait MarketplaceV3Category
{
    use MarketplaceCategory {
        MarketplaceCategory::basePath as private previousBasePath;
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return static::previousBasePath() . 'v3/';
    }
}
