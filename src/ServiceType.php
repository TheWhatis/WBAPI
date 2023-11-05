<?php
/**
 * Файл с перечислением
 * типа сервиса
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */

namespace Whatis\WBAPI\Skeleton;

/**
 * Перечисление типа
 * сервиса
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
enum ServiceType: string
{
    /**
     * Стандартный тип сервиса
     * со стандартным токеном
     */
    case Suppliers = 'suppliers-api.wildberries.ru';

    /**
     * Сервис статистики с
     * токеном статистики
     */
    case Statistics = 'statistics-api.wildberries.ru';
}
