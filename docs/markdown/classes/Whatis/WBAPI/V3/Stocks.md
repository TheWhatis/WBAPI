***

# Stocks

Класс-сервис для работы
с остатками

PHP version 8

* Full name: `\Whatis\WBAPI\V3\Stocks`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




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
