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
     * Получить массив с данными, с которыми
     * работает трейт
     *
     * @return array
     */
    abstract protected function getArray(): array;

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
            $this->getArray()[] = $value;
            return;
        }

        $this->getArray()[$offset] = $value;
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
        return isset($this->getArray()[$offset]);
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
        unset($this->getArray()[$offset]);
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
        return $this->getArray()[$offset];
    }
}
