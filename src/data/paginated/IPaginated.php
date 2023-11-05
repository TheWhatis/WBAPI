<?php
/**
 * Файл с интерфейсом для реализации
 * данных, которые разбиты
 * на пакеты данных и их
 * возможно получить порционно
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

use Whatis\WBAPI\Support;
use Generator;

/**
 * Интерфейс для реализации
 * данных, которые разбиты
 * на пакеты данных и их
 * возможно получить порционно
 *
 * PHP version 8
 *
 * @category Data
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
interface IPaginated
{
    /**
     * Получить следующий пакет
     * данных
     *
     * @return static
     */
    public function next(): static;

    /**
     * Получить опцию `next` для следующего
     * пакета данных
     *
     * @return ?int
     */
    public function getNext(): ?int;

    /**
     * Создать генератор для циклического
     * получения данных из wildberries api,
     * которые разбиты на пакеты
     *
     * @return Generator
     */
    public function asGenerator(): Generator;
}
