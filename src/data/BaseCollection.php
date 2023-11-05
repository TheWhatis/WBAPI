<?php
/**
 * Файл с абстрактным классом
 * для работы с коллекциями
 * данных из wildberries api
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */

namespace Whatis\WBAPI\Skeleton\Data;

use Whatis\WBAPI\Skeleton\Support;

/**
 * Абстрактный класс для работы с
 * коллекциями данных wildberries api
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
abstract class BaseCollection extends BaseData implements \Countable
{
    use Support\Countable;
}
