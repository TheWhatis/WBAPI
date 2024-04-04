***

# Stocks

Класс-сервис для работы
с остатками

PHP version 8

* Full name: `\Whatis\WBAPI\V3\Stocks`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/WBAPI - 




## Methods


### update

Обновить остатки товаров

```php
public update(int $warehouseId, array $stocks): mixed
```

`api/v3/stocks/{warehouseId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$warehouseId` | **int** | Идентификатор склада продавца |
| `$stocks` | **array** | Баркоды товаров и их остатки |





***

### delete

Удалить остатки товаров

```php
public delete(int $warehouseId, array $skus): mixed
```

`api/v3/stocks/{warehouseId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$warehouseId` | **int** | Идентификатор склада продавца |
| `$skus` | **array** | Баркоды товаров |





***

### get

Получить остатки товаров

```php
public get(int $warehouseId, array $skus): mixed
```

`api/v3/stocks/{warehouseId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$warehouseId` | **int** | Идентификатор склада продавца |
| `$skus` | **array** | Баркоды товаров |





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
public __construct(\Whatis\WBAPI\Http\IClient $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\Whatis\WBAPI\Http\IClient** | Клиент |





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
> Automatically generated on 2024-04-04
