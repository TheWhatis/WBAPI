<?php
/**
 * Файл с трейтом, реализующим основные
 * методы интерфейса `IPaginated`
 *
 * PHP version 8
 *
 * @category Data
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */

namespace Whatis\WBAPI\Skeleton\Data;

/**
 * Трейт, реализующий основные
 * методы интерфейса `IPaginated`
 *
 * PHP version 8
 *
 * @category Data
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
trait TPaginated
{
    /**
     * Создать генератор для циклического
     * получения данных из wildberries api,
     * которые разбиты на пакеты
     *
     * @return \Generator
     */
    public function asGenerator(): \Generator
    {
        yield $this;
        while ($this->getNext() !== null && count($this->next())) {
            yield $this;
        }
    }
}
