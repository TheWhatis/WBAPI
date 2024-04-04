<?php
/**
 * Файл пакета с основными сервисами библиотеки
 *
 * PHP version 8
 *
 * @category Package
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Package;

use Whatis\WBAPI\V1;
use Whatis\WBAPI\V2;
use Whatis\WBAPI\V3;

/**
 * Пакет с основными сервисами библиотеки
 *
 * PHP version 8
 *
 * @category Package
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class DefaultPackage extends BasePackage
{
    /**
     * Получить пакеты
     *
     * @return array<string, string>
     */
    public function packages(): array
    {
        return [
            'v1/prices'     => V1\Prices::class,
            'v1/statistics' => V1\Statistics::class,

            // Контент
            'v2/config' => V2\Config::class,
            'v2/media'  => V2\Media::class,
            'v2/tags'   => V2\Tags::class,
            'v2/trash'  => V2\Trash::class,
            'v2/upload' => V2\Upload::class,
            'v2/view'   => V2\View::class,
            'v2/prices' => V2\Prices::class,

            // Маркетплейс
            'v3/orders'     => V3\Orders::class,
            'v3/passes'     => V3\Passes::class,
            'v3/stocks'     => V3\Stocks::class,
            'v3/supplies'   => V3\Supplies::class,
            'v3/warehouses' => V3\Warehouses::class,
        ];
    }
}
