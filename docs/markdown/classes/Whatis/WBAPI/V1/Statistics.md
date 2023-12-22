***

# Statistics

Класс-сервис для работы
со статистикой

PHP version 8

* Full name: `\Whatis\WBAPI\V1\Statistics`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### getPermissions

Получить массив необходимых разрешений
для этого сервиса

```php
public static getPermissions(): \Whatis\WBAPI\Permissions
```



* This method is **static**.








***

### baseUri

Получить базовый uri

```php
public static baseUri(): string
```



* This method is **static**.








***

### supplier

Получение статистики поставок

```php
public supplier(\DateTime|string $dateFrom): array
```

`api/v1/supplier/incomes`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFrom` | **\DateTime&#124;string** | Дата и время последнего<br />изменения поставок |





***

### stocks

Получение остатков товаров
на складах

```php
public stocks(\DateTime|string $dateFrom): array
```

`api/v1/supplier/stocks`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFrom` | **\DateTime&#124;string** | Дата и время последнего<br />изменения по товару |





***

### orders

Получение статистики заказов

```php
public orders(\DateTime|string $dateFrom, int $flag): array
```

`api/v1/supplier/orders`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFrom` | **\DateTime&#124;string** | Дата и время последнего<br />изменения по товару |
| `$flag` | **int** | Флаг по поиску |





***

### sales

Получение статистики продаж
и возвратов

```php
public sales(\DateTime|string $dateFrom, int $flag): array
```

`api/v1/supplier/sales`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFrom` | **\DateTime&#124;string** | Дата и время последнего<br />изменения продажи/возврата |
| `$flag` | **int** | Флаг по поиску |





***

### reportDetailByPeriod

Отчет о продажах по реализации

```php
public reportDetailByPeriod(\DateTime|string $dateFrom, \DateTime|string $dateTo, int $limit = 10000, int $rrdid): array
```

`api/v1/supplier/reportDetailByPeriod`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFrom` | **\DateTime&#124;string** | Начальная дата отчета |
| `$dateTo` | **\DateTime&#124;string** | Конечная дата отчета |
| `$limit` | **int** | Максимальное количество строк |
| `$rrdid` | **int** | Идентификатор строки отчета |





***


## Inherited methods


### __construct

Иницилизация сервиса

```php
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`PermissionsDoesNotExistsException`](../Exceptions/PermissionsDoesNotExistsException.md)



***

### getBaseUri

Получить базовый uri

```php
public static getBaseUri(): string
```



* This method is **static**.








***

### getDomain

Получить домен для обращения

```php
public static getDomain(): string
```



* This method is **static**.








***

### request

Воспроизвести запрос

```php
public request( $args): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **** | Аргументы для запроса Request |





***


***
> Automatically generated on 2023-12-22
