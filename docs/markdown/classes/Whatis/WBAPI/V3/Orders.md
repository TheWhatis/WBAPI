***

# Orders

Класс-сервис для работы
со сборочными заданиями

PHP version 8

* Full name: `\Whatis\WBAPI\V3\Orders`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### new

Получить новые сборочные задания

```php
public new(): array
```

`api/v3/orders/new`










***

### get

Получить информацию по сборочнм заданиям

```php
public get(int $limit = 10, int $next, \DateTime|int $from = null, \DateTime|int $to = null): array
```

`api/v3/orders`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** | Лимит по количеству данных |
| `$next` | **int** | Параметр пагинации |
| `$from` | **\DateTime&#124;int** | Дата начала периода в<br />формате unix timestamp |
| `$to` | **\DateTime&#124;int** | Дата конца периода в<br />формате unix timestamp |





***

### statuses

Получить статусы сборочных заданий

```php
public statuses(array $orders): array
```

`api/v3/orders/status`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orders` | **array** | Идентификаторы сборочных заданий |





***

### cancel

Отменить сборочное задание

```php
public cancel(int $orderId): array
```

`api/v3/orders/{orderId}/cancel`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orderId` | **int** | Идентификатор сборочного задания |





***

### metaSgtin

Закрепить за сборочным заданием КиЗ
(маркировку честного знака)

```php
public metaSgtin(int $orderId, array $sgtin): array
```

`api/v3/orders/{orderId}/meta/sgtin`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orderId` | **int** | Идентификатор сборочного задания |
| `$sgtin` | **array** | Массив КиЗов |





***

### stickers

Получить этикетки сборочных заданий

```php
public stickers(string $type, int $width, int $height, array $orders): array
```

`api/v3/orders/stickers`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | Тип этикетки |
| `$width` | **int** | Ширина этикетки |
| `$height` | **int** | Высота этикетки |
| `$orders` | **array** | Идентификаторы сборочных заданий |





***

### getMeta

Получить метаданные сборочного задания

```php
public getMeta(int $orderId): array
```

`api/v3/orders/{orderId}/meta`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orderId` | **int** | Идентификатор сборочного задания |





***

### deleteMeta

Удалить метаданные сборочного задания

```php
public deleteMeta(int $orderId, string $key): array
```

`api/v3/orders/{orderId}/meta`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orderId` | **int** | Идентификатор сборочного задания |
| `$key` | **string** | Название метаданных для удаления (<br />imei, uin, gtin) |





***

### metaUin

Закрепить за сборочным заданием УИН
(уникальный идентификационный номер)

```php
public metaUin(int $orderId, string $uin): array
```

`api/v3/orders/{orderId}/meta/uin`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orderId` | **int** | Идентификатор сборочного задания |
| `$uin` | **string** | УИН |





***

### metaImei

Закрепить за сборочным заданием IMEI

```php
public metaImei(int $orderId, string $imei): array
```

`api/v3/orders/{orderId}/meta/imei`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orderId` | **int** | Идентификатор сборочного задания |
| `$imei` | **string** | IMEI |





***

### metaGtin

Закрепить за сборочным заданием GTIN

```php
public metaGtin(int $orderId, string $gtin): array
```

`api/v3/orders/{orderId}/meta/gtin`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orderId` | **int** | Идентификатор сборочного задания |
| `$gtin` | **string** | GTIN |





***

### externalStickers

Получить список ссылок на этикетки
для сборочных заданий, которые
требуются при кроссбордере

```php
public externalStickers(array $orders): array
```

`api/v3/files/orders/external-stickers`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orders` | **array** | Идентификаторы сборочных заданий |





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
