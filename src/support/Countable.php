<?php
/**
 * Файл с трейтом который
 * реализует интерфейс
 * Countable
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */

namespace Whatis\WBAPI\Skeleton\Support;

/**
 * Трейт реализующий Countable
 *
 * Чтобы изменить название свойства,
 * которое будет использоваться для
 * работы с массивом (по-умолчанию
 * \- `array`), необходимо
 * установить свойство
 * `$property`
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/Settings
 */
trait Countable
{
    /**
     * Стандартное название свойства
     * для работы с массивом
     *
     * @internal
     *
     * @var string
     */
    private string $_property = 'array';

    // И здесь можете указать своё
    // свойства с названием $property
    // protected/public string $property = 'array'

    /**
     * Установить новое значение
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->{$this->property ?? $this->_property});
    }
}
