# Библиотека для WBAPI
## Документация
  * [Documentation](https://github.com/TheWhatis/WBAPI/tree/master/docs/markdown/Home.md "Documentation")
## Установка
```
composer require whatis/wbapi
```

## Использование
### Использование с ServiceManager
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\WBAPI\Client\Client;
use Whatis\WBAPI\V1\Prices;

$token 'some.jwt.token.-asdffsdfJLA';
$prices = new Prices(new Client($clientId, $token));

var_dump($prices->get());
// ...
```
### С использованием ServiceManager
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\WBAPI\Client\Client;
use Whatis\WBAPI\ServiceManager;
use Whatis\WBAPI\ServiceCompositor;
use Whatis\WBAPI\Package\DefaultPackage;

$token 'some.jwt.token.-asdffsdfJLA';

// С использованием клиента
$manager = new ServiceManager(new Client($clientId, $token));

// Без использования клиента
$manager = new ServiceManager($token);

// Для работы с сервисами по-умолчанию, необходимо
// расширить менеджер пакетом DefaultPackage
$manager->package(new DefaultPackage);

// Вы можете расширять менеджер своими сервисами,
// например, создать псевдоним для существующего
$manager->extend('prices', fn ($manager) => $manager->service('v1/prices'));

// Или скомпановать несколько сервисов
// под одним названием
$manager->extend('composed', fn ($manager) => new ServiceCompositor([
    $manager->creator('v1/prices'),
    $manager->creator('v1/statistics')
]));

// Стандартное использование
var_dump($manager->use('prices')->get());
var_dump($manager->use('v1/prices')->get());
var_dump($manager->use('composed')->get());

// С автоматическим поиском сервиса и метода.
// Это работает так: делится название метода по
// Camel|Case, если находит название сервиса
// по одному из разделенных слов, то удаляет
// его из названия метода и вызывает его
// из сервиса: pricesGet->|prices|get
// getPrices->get|Prices|

var_dump($manager->pricesGet());
var_dump($manager->getPrices());
// ...
```

## Создание своего сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

namespace Whatis\WBAPI\Example;

use Whatis\WBAPI\Service\BaseService;

// Атрибут, необходимый для
// метода ServiceManager::mapping
use Whatis\WBAPI\Attribute\Mapping;

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
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return 'api/v3/';
    }

    /**
     * Получить что-то
     *
     * @return mixed
     */
    #[Mapping('orders')]
    public function get(): mixed
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

    // ...
}
```
