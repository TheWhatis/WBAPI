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
public new(): mixed
```

`api/v3/orders/new`










***

### get

Получить информацию по сборочнм заданиям

```php
public get(int $limit = 10, int $next, \DateTime|int $from = null, \DateTime|int $to = null): mixed
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
public statuses(array $orders): mixed
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
public cancel(int $orderId): mixed
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
public metaSgtin(int $orderId, array $sgtin): mixed
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
public stickers(string $type, int $width, int $height, array $orders): mixed
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
public getMeta(int $orderId): mixed
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
public deleteMeta(int $orderId, string $key): mixed
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
public metaUin(int $orderId, string $uin): mixed
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
public metaImei(int $orderId, string $imei): mixed
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
public metaGtin(int $orderId, string $gtin): mixed
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
public externalStickers(array $orders): mixed
```

`api/v3/files/orders/external-stickers`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orders` | **array** | Идентификаторы сборочных заданий |





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
