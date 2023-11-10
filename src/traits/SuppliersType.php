<?php
/**
 * Файл с трейтом, реализующим
 * статический метод getType
 * для типа сервиса Suppliers
 *
 * PHP version 8
 *
 * @category Traits
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\Skeleton\Traits;

use Whatis\WBAPI\Skeleton\ServiceType;

/**
 * Трейт, реализующий
 * статический метод getType
 * для типа сервиса Suppliers
 *
 * PHP version 8
 *
 * @category Traits
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
trait SuppliersType
{
    /**
     * Возвращаем тип сервиса Suppliers
     *
     * @return ServiceType
     */
    public static function getType(): ServiceType
    {
        return ServiceType::Suppliers;
    }
}
