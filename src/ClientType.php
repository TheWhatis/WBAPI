<?php
/**
 * Файл с перечислением
 * типа клиента
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WbApi
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\Skeleton;

/**
 * Перечисление типа
 * клиента
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WbApi
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
enum ClientType: string
{
    /**
     * Стандартный тип клиента
     * со стандартным токеном
     */
    case Suppliers = 'suppliers-api.wildberries.ru';

    /**
     * Клиент статистики с
     * токеном статистики
     */
    case Statistics = 'statistics-api.wildberries.ru';
}
