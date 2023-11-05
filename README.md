# Скелет для работы с wildberries api
## Документация
  * [Documentation](https://github.com/TheWhatis/WBApiSkeleton/tree/master/docs/markdown/index.md "Documentation")
## Установка
```
composer require whatis/wb-api-skeleton
```
## Использование
### Создание своего сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

namespace Whatis\WBAPI\Example;

use Whatis\WBAPI\Skeleton\BaseService;
use Whatis\WBAPI\Skeleton\Client;
use Whatis\WBAPI\Skeleton\ServiceType;

/**
 * Пример срвиса
 *
 * PHP version 8
 *
 * @category Example
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Service extends BaseService
{
    /**
     * Получить тип сервиса
     *
     * @return ServiceType
     */
    public static function getType(): ServiceType
    {
        return ServiceType::Suppliers;
    }

    /**
     * Получить что-то
     *
     * @return array
     */
    public function get(): array
    {
        $timezone = new DateTimeZone('UTC');

        $dateTo = new DateTime('now', $timezone);
        $dateFrom = new DateTime('-3 day', $timezone);

        return $this->request(
            'GET', 'v3/orders', [
                'limit' => 10,
                'next' => 0,
                'dateFrom' => $dateFrom->getTimestamp(),
                'dateTo' => $dateTo->getTimestamp()
            ]
        );
    }
}
```
### Использование сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\WBAPI\Example\Service;

$token = 'wbtoken';
$service = new Service($token);

var_dump($service->get());
// > array(2) {
// >   ["orders"]=>
// >   array(10) {
// >     [0]=>
// >     array(19) {
// >       ["address"]=>
// >       NULL
// >       ["deliveryType"]=>
// >       string(3) "fbs"
// >       ["supplyId"]=>
// >       string(14) "WB-GI-63588689"
// >       ...
```
