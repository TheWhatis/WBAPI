***

# IService

Интерфейс сервиса

PHP version 8

* Full name: `\Whatis\WBAPI\Service\IService`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



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





***

### getPermissions

Получить массив необходимых разрешений
для этого сервиса

```php
public static getPermissions(): \Whatis\WBAPI\Permissions
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
