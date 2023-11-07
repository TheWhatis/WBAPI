<?php
/**
 * Файл с трейтом который
 * реализует интерфейс
 * Iterator для
 * ассоциативного массива
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
 * Трейт реализующий Iterator
 *
 * Трейт который реализует
 * интерфейс Iterator для
 * ассоциативного массива
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
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
trait AssocIterator
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
     * Вернуть позицию в начало
     */
    public function rewind(): void
    {
        reset($this->{$this->property ?? $this->_property});
    }

    /**
     * Проверить существует ли элемент
     * по позиции в массиве
     *
     * @return bool
     */
    public function valid(): bool
    {
        return key($this->{$this->property ?? $this->_property}) !== null;
    }

    /**
     * Получить текущий элемент
     *
     * @return mixed
     */
    public function current(): mixed
    {
        return current($this->{$this->property ?? $this->_property});
    }

    /**
     * Получить ключ элемента
     *
     * @return string|int
     */
    public function key(): string|int
    {
        return key($this->{$this->property ?? $this->_property});
    }

    /**
     * Перейти к следующей позиции в массиве
     *
     * @return void
     */
    public function next(): void
    {
        next($this->{$this->property ?? $this->_property});
    }
}
