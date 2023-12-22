<?php
/**
 * Файл с регистрацией сервисов
 * для `ServiceFacade`
 *
 * PHP version 8
 *
 * @category Main
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

use Whatis\WBAPI\ServiceFacade;

use Whatis\WBAPI\V1;
use Whatis\WBAPI\V2;
use Whatis\WBAPI\V3;

ServiceFacade::set('v1/prices', V1\Prices::class);
ServiceFacade::set('v1/statistics', V1\Statistics::class);

// Контент
ServiceFacade::set('v2/config', V2\Config::class);
ServiceFacade::set('v2/media', V2\Media::class);
ServiceFacade::set('v2/tags', V2\Tags::class);
ServiceFacade::set('v2/trash', V2\Trash::class);
ServiceFacade::set('v2/upload', V2\Upload::class);
ServiceFacade::set('v2/view', V2\View::class);

// Маркетплейс
ServiceFacade::set('v3/orders', V3\Orders::class);
ServiceFacade::set('v3/passes', V3\Passes::class);
ServiceFacade::set('v3/stocks', V3\Stocks::class);
ServiceFacade::set('v3/supplies', V3\Supplies::class);
ServiceFacade::set('v3/warehouses', V3\Warehouses::class);
