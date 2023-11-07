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

namespace Whatis\WBAPI\Skeleton\Data;

use Whatis\WBAPI\Skeleton\Support;

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
abstract class BaseData implements \ArrayAccess, \Iterator
{
    use Support\ArrayAccess;
    use Support\AssocIterator;

    /**
     * Стандартное название свойства
     * для работы с массивом
     *
     * @internal
     *
     * @var string
     */
    private string $_property = 'data';

    /**
     * Полученные данные
     *
     * @var array
     */
    public array $data;

    /**
     * Контекст вызова
     *
     * @var object $context;
     */
    public object $context;

    /**
     * Иницилизация данных
     *
     * @param array $options Опции
     */
    public function __construct(array $options)
    {
        foreach ($options as $key => $value) {
            $this->$key = $value;
        }

        $property = $this->property ?? $this->_property;
        $this->$property = array_map(
            function ($unit) use ($options) {
                return $this->wrap($unit, $options);
            }, $this->data[$property]
        );
    }

    /**
     * Завернуть в "оболочку"
     * единицу данных
     *
     * @param mixed $data    Переданные данные
     * @param array $options Опции, переданные в __construct
     *
     * @return mixed
     */
    public function wrap(mixed $data, array $options): mixed
    {
        return $data;
    }

    /**
     * Конвертировать в массив
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->data;
    }
}
