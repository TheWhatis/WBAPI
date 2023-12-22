***

# Prices

Класс-сервис для работы
с ценами

PHP version 8

* Full name: `\Whatis\WBAPI\V1\Prices`
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

### get

Получение информации о ценах

```php
public get(int $quantity): array
```

`public/api/v1/info`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$quantity` | **int** | 1 - товар с ненулевым остатком,<br />0 - товар с любым остатком |





***

### set

Загрузка цен

```php
public set(array $prices): array
```

`public/api/v1/prices`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prices` | **array** | Массив с новыми ценами |





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
