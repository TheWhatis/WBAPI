<?php
/**
 * Файл с трейтом который
 * реализует интерфейс
 * ArrayAccess
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
 * Трейт реализующий ArrayAccess
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
trait ArrayAccess
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
     * @param mixed $offset Ключ
     * @param mixed $value  Значение
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->{$this->property ?? $this->_property}[] = $value;
            return;
        }

        $this->{$this->property ?? $this->_property}[$offset] = $value;
    }

    /**
     * Проверить есть ли значение
     * в массиве
     *
     * @param mixed $offset Ключ
     *
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->{$this->property ?? $this->_property}[$offset]);
    }

    /**
     * Удалить значение из массива
     *
     * @param mixed $offset Ключ
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->{$this->property ?? $this->_property}[$offset]);
    }

    /**
     * Получить значение
     *
     * @param mixed $offset Ключ
     *
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->{$this->property ?? $this->_property}[$offset];
    }
}
