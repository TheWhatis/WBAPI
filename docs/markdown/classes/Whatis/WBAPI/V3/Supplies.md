***

# Supplies

Класс-сервис для работы
с поставками

PHP version 8

* Full name: `\Whatis\WBAPI\V3\Supplies`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### new

Создать новую поставку

```php
public new(string $name): mixed
```

`api/v3/supplies`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название поставки |





***

### get

Получить список поставок

```php
public get(int $limit = 10, int $next): mixed
```

`api/v3/supplies`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** | Лимит по количеству данных |
| `$next` | **int** | Параметр пагинации |





***

### addOrder

Добавить к поставке сборочное задание

```php
public addOrder(string $supplyId, int $orderId): mixed
```

`api/v3/supplies/{supplyId}/orders/{orderId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |
| `$orderId` | **int** | Идентификатор сборочного задания |





***

### byId

Получить информацию о поставке

```php
public byId(string $supplyId): mixed
```

`api/v3/supplies/{supplyId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |





***

### cancel

Удалить поставку

```php
public cancel(string $supplyId): mixed
```

`api/v3/supplies/{supplyId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |





***

### orders

Получить сборочные задания в поставке

```php
public orders(string $supplyId): mixed
```

`api/v3/supplies/{supplyId}/orders`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |





***

### toDeliver

Передать поставку в доставку

```php
public toDeliver(string $supplyId): mixed
```

`api/v3/supplies/{supplyId}/orders`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |





***

### barcode

Получить QR-код поставки

```php
public barcode(string $supplyId, string $type): mixed
```

`api/v3/supplies/{supplyId}/barcode`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |
| `$type` | **string** | Тип этикетки |





***

### getTrbx

Получить список коробов поставки

```php
public getTrbx(string $supplyId): mixed
```

`api/v3/supplies/{supplyId}/trbx`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |





***

### setTrbx

Добавить короба к поставке

```php
public setTrbx(string $supplyId, array $amount): mixed
```

`api/v3/supplies/{supplyId}/trbx`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |
| `$amount` | **array** | Количество коробов, которые<br />необходимо добавить к поставке |





***

### deleteTrbx

Удалить короба из поставки

```php
public deleteTrbx(string $supplyId, array $trbxIds): mixed
```

`api/v3/supplies/{supplyId}/trbx`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |
| `$trbxIds` | **array** | Список идентификаторов коробов |





***

### addOrdersToTrbx

Добавить заказы к коробу

```php
public addOrdersToTrbx(string $supplyId, string $trbxId, array $orderIds): mixed
```

`api/v3/supplies/{supplyId}/trbx/{trbxId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |
| `$trbxId` | **string** | Список идентификаторов коробов |
| `$orderIds` | **array** | Список идентификаторов заказов |





***

### removeOrderFromTrbx

Удалить заказ из короба

```php
public removeOrderFromTrbx(string $supplyId, string $trbxId, int $orderId): mixed
```

`api/v3/supplies/{supplyId}/trbx/{trbxId}/orders/{orderId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |
| `$trbxId` | **string** | Список идентификаторов коробов |
| `$orderId` | **int** | Идентификатор заказа |





***

### trbxStickers

Получить стикеры коробов поставки

```php
public trbxStickers(string $supplyId, string $type, array $trbxIds): mixed
```

`api/v3/supplies/{supplyId}/trbx/stickers`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supplyId` | **string** | Идентификатор поставки |
| `$type` | **string** | Тип этикетки |
| `$trbxIds` | **array** | Список идентификаторов коробов |





***


## Inherited methods


### basePath

Получить базовый uri

```php
public static basePath(): string
```



* This method is **static**.








***

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
