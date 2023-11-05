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

use Whatis\WBAPI\Support;
use Generator;

/**
 * Трейт, реализующий основные
 * методы интерфейса `IPaginated`
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
 * @category Data
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
trait TPaginated
{
    /**
     * Стандартное название свойства
     * для работы с данными
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
     * Создать генератор для циклического
     * получения данных из wildberries api,
     * которые разбиты на пакеты
     *
     * @return Generator
     */
    public function asGenerator(): Generator
    {
        yield $this;
        while ($this->getNext() !== null) {
            $next = $this->next();

            if (count($next)) {
                $this->setNext($next->getNext());

                $property = $this->property ?? $this->_property;
                $this->$property = $next->toArray();

                yield $this;
                continue;
            }
            return;
        }
    }

    /**
     * Установить опцию `next` для следующего
     * пакета данных
     *
     * @param ?int $next Опция `next`
     *
     * @return void
     */
    abstract protected function setNext(?int $next): void;
}
