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

### domain

Получить домен для обращения

```php
public static domain(): string
```



* This method is **static**.








***

### basePath

Получить базовый uri

```php
public static basePath(): string
```



* This method is **static**.








***

### supplier

Получение статистики поставок

```php
public supplier(\DateTime|string $dateFrom): mixed
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
public stocks(\DateTime|string $dateFrom): mixed
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
public orders(\DateTime|string $dateFrom, int $flag): mixed
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
public sales(\DateTime|string $dateFrom, int $flag): mixed
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
public reportDetailByPeriod(\DateTime|string $dateFrom, \DateTime|string $dateTo, int $limit = 10000, int $rrdid): mixed
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





***

### throwNotEnoughPermissions

Вывести ошибку о том, что у токена
недостаточно разрешений для работы
этого сервиса

```php
protected throwNotEnoughPermissions(string $token): never
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`PermissionsDoesNotExistsException`](../Exceptions/PermissionsDoesNotExistsException.md)



***

### validateToken

Валидировать токен

```php
protected validateToken(string $token): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException.md)



***

### domain

Получить домен для обращения

```php
public static domain(): string
```



* This method is **static**.








***

### basePath

Получить базовый uri

```php
public static basePath(): string
```



* This method is **static**.








***

### withFormatter

Установить форматировщик

```php
public withFormatter(\Whatis\WBAPI\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\WBAPI\Formatters\IJsonFormatter** | Форматировщик |





***

### getFormatter

Получить форматировщик

```php
public getFormatter(): \Whatis\WBAPI\Formatters\IJsonFormatter
```












***

### withRequestFactory

Установить фабрику запросов

```php
public withRequestFactory(\Psr\Http\Message\RequestFactoryInterface $factory): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\Psr\Http\Message\RequestFactoryInterface** | Фабрика запросов |





***

### getRequestFactory

Получить фабрику запросов

```php
public getRequestFactory(): \Psr\Http\Message\RequestFactoryInterface
```












***

### headers

Получить заголовки из Payload

```php
protected headers(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### params

Получить параметры из Payload

```php
protected params(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### body

Получить тело запроса из Payload

```php
protected body(mixed $payload): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### request

Воспроизвести запрос

```php
public request(string|\Whatis\WBAPI\Enums\HttpMethod $method, string $path, mixed $payload = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string&#124;\Whatis\WBAPI\Enums\HttpMethod** | Метод |
| `$path` | **string** | Путь до запроса |
| `$payload` | **mixed** | Полезная нагрузка запроса |





***


***
> Automatically generated on 2024-03-11
