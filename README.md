# Скелет для работы с wildberries api
## Документация
  * [Documentation](https://github.com/TheWhatis/WBAPI/tree/master/docs/markdown/index.md "Documentation")
## Установка
```
composer require whatis/wbapi
```
## Использование
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

// Фасад для взаимодествия с "сервисами" -
// классами, реализуюими методы для
// взаимодействия с api
use Whatis\WBAPI\ServiceFacade;

$token 'some.jwt.token.-asdffsdfJLA';
$facade = ServiceFacade::make($token)
    ->useService(
        'v2/tags', // Ключ сервиса, находиться
                   // в ServiceFacade::$mapping,
        'tags' // Алиас для последующего взаимодейстия
    )
    ->useService('v2/config', 'config')
    ->useService('v3/orders', 'orders')
    ->build(); // Создаем фасад

// Получение сбор-х заданий
$orders = $facade->use('orders')->get();
var_dump($orders);

// Получение тегов
$tags = $facade->use('tags')->get();
var_dump($tags);
// ...
```

## Создание своего сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

namespace Whatis\WBAPI\Example;

use Whatis\WBAPI\BaseService;
use Whatis\WBAPI\Permission;
use Whatis\WBAPI\Permissions;

use DateTime;
use DateTimeZone;

/**
 * Пример сервиса
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
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    public static function getPermissions(): Permissions
    {
        return new Permissions(
            Permission::Orders,
            Permission::Statistics,
            Permission::Promotion
        );
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function getBaseUri(): string
    {
        return 'api/v3/';
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
            'GET', 'orders', [
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
