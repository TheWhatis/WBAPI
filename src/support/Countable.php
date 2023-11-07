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
     * Получить массив с данными, с которыми
     * работает трейт
     *
     * @return array
     */
    abstract protected function getArray(): array;

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
