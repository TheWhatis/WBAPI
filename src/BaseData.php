<?php
/**
 * Файл с абстрактным классом
 * для работы с данными из
 * wildberries api
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
 * Абстрактный класс для работы с
 * данными wildberries api
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
abstract class BaseData implements ArrayAccess, Iterator
{
    use Support\ArrayAccess;
    use Support\AssocIterator;

    /**
     * Иницилизация данных
     *
     * @param array $options Опции
     */
    abstract public function __construct(array $options);

    /**
     * Конвертировать в массив
     *
     * @return array
     */
    abstract public function toArray(): array;
}
