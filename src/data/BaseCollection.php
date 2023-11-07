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
abstract class BaseCollection extends BaseData
{
    /**
     * Стандартное название свойства
     * для работы с данными
     *
     * @internal
     *
     * @var ?string
     */
    private ?string $_property = 'data';

    // И здесь можете указать своё
    // свойства с названием $property
    // protected/public string $property = 'array'
    
    /**
     * Иницилизация данных
     *
     * @param array $options Опции
     */
    public function __construct(array $options)
    {
        parent::__construct($options);
        $property = $this->property ?? $this->_property;
        $this->$property = array_map(
            function ($unit) use ($options) {
                return $this->wrap($unit, $options);
            }, $this->data[$property]
        );
    }
}
