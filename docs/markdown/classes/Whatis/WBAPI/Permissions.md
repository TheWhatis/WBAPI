***

# Permissions

Интерфейс сервиса

PHP version 8

* Full name: `\Whatis\WBAPI\Permissions`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### bitmask

Сформированная битмаска из
переданных разрешений

```php
protected int $bitmask
```






***

### permissions

Список переданных разрешений

```php
protected array&lt;int,\Whatis\WBAPI\Permission&gt; $permissions
```






***

## Methods


### __construct

Иницилизация класса для
работы с разрешениями
токена

```php
public __construct(\Whatis\WBAPI\Permission $permissions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\WBAPI\Permission** | Разрешения |





***

### get

Получить все разрешения

```php
public get(): array&lt;int,\Whatis\WBAPI\Permission&gt;
```









**Return Value:**

Разрешения




***

### has

Проверить что одно из переданных
разрешенний установлено

```php
public has(\Whatis\WBAPI\Permission $permissions): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\WBAPI\Permission** | Разрешения |





***

### contains

Проверить что все переданные
разрешения установлены

```php
public contains(\Whatis\WBAPI\Permission $permissions): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\WBAPI\Permission** | Разрешения |





***

### set

Установить новые разрешения

```php
public set(\Whatis\WBAPI\Permission $permissions): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\WBAPI\Permission** | Разрешения |





***

### delete

Удалить разрешения из текущих

```php
public delete(\Whatis\WBAPI\Permission $permissions): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\WBAPI\Permission** | Разрешения |





***

### hasByToken

Проверить что имеются
все необходимые разрешения
в токене

```php
public hasByToken(string $jwtToken): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwtToken` | **string** | Jwt Токен |





***

### _throwInvalidToken

Вывести ошибку о том, что передан
неверный jwt token

```php
private static _throwInvalidToken(string $token): never
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`InvalidArgumentException`](../../InvalidArgumentException.md)



***

### createBitmask

Сгенерировать битмаску

```php
public static createBitmask(\Whatis\WBAPI\Permission $permissions): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\WBAPI\Permission** | Разрешения |


**Return Value:**

Битмаска




***

### getJwtBitmask

Получить битмаску из токена

```php
public static getJwtBitmask(string $jwtToken): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwtToken` | **string** | Токен |


**Return Value:**

Битмаска



**Throws:**

- [`InvalidArgumentException`](../../InvalidArgumentException.md)



***


***
> Automatically generated on 2023-12-22
