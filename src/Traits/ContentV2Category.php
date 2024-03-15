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
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Traits;

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
 * @link     https://github.com/TheWhatis/WBAPI
 */
trait ContentV2Category
{
    use ContentCategory {
        ContentCategory::basePath as private previousBasePath;
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return static::previousBasePath() . 'v2/';
    }
}
