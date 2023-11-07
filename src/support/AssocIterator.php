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
     * Получить массив с данными, с которыми
     * работает трейт
     *
     * @return array
     */
    abstract protected function getArray(): array;

    /**
     * Вернуть позицию в начало
     */
    public function rewind(): void
    {
        reset($this->getArray());
    }

    /**
     * Проверить существует ли элемент
     * по позиции в массиве
     *
     * @return bool
     */
    public function valid(): bool
    {
        return key($this->getArray()) !== null;
    }

    /**
     * Получить текущий элемент
     *
     * @return mixed
     */
    public function current(): mixed
    {
        return current($this->getArray());
    }

    /**
     * Получить ключ элемента
     *
     * @return string|int
     */
    public function key(): string|int
    {
        return key($this->getArray());
    }

    /**
     * Перейти к следующей позиции в массиве
     *
     * @return void
     */
    public function next(): void
    {
        next($this->getArray());
    }
}
