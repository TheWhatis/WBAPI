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


### getType

Получить тип сервиса

```php
public static getType(): \Whatis\WBAPI\V3\ServiceType
```



* This method is **static**.








***

### new

Создать новую поставку

```php
public new(string $name): array
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
public get(int $limit = 10, int $next): array
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
public byId(string $supplyId): array
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
public orders(string $supplyId): array
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
public toDeliver(string $supplyId): array
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
public barcode(string $supplyId, string $type): array
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
public getTrbx(string $supplyId): array
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
public setTrbx(string $supplyId, array $amount): array
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
public trbxStickers(string $supplyId, string $type, array $trbxIds): array
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


### getBaseUri

Получить базовый uri

```php
public static getBaseUri(): string
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




**Throws:**

- [`PermissionsDoesNotExistsException`](../Exceptions/PermissionsDoesNotExistsException.md)



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
