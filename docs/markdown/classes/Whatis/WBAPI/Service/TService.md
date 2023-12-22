***

# TService

Трейт с реализацией
интерфейса `IService`

PHP version 8

* Full name: `\Whatis\WBAPI\Service\TService`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### client

Клиент

```php
public \Whatis\WBAPI\Client\IClient $client
```






***

### permissions

Разрешения сервиса

```php
public \Whatis\WBAPI\Permissions $permissions
```






***

## Methods


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

