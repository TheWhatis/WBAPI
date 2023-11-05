<?php
/**
 * Файл с абстрактным классом,
 * реализующим основные методы
 * интерфейса `IPaginated`
 * (использует трейт `TPaginated`)
 *
 * PHP version 8
 *
 * @category Data
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */

namespace Whatis\WBAPI\Skeleton\Data;

/**
 * Абстрактный класс, реализующий
 * основные методы интерфейса
 * `IPaginated` (использует
 * трейт `TPaginated`)
 *
 * PHP version 8
 *
 * @category Data
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
abstract class BasePaginated extends BaseCollection implements IPaginated
{
    use TPaginated;
}
