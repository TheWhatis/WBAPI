***

# Passes

Класс-сервис для работы
с пропусками

PHP version 8

* Full name: `\Whatis\WBAPI\V3\Passes`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### offices

Получить список складов, для которых
требуется пропуск

```php
public offices(): array
```

`api/v3/passes/offices`










***

### get

Получить список пропусков продавца

```php
public get(): array
```

`api/v3/passes`










***

### create

Создать пропуск

```php
public create(string $firstName, string $lastName, string $carModel, string $carNumber, int $officeId): mixed
```

`api/v3/passes`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$firstName` | **string** | Имя водителя |
| `$lastName` | **string** | Фамилия водителя |
| `$carModel` | **string** | Марка машины |
| `$carNumber` | **string** | Номер машины |
| `$officeId` | **int** | Идентификатор склада |





***

### update

Создать пропуск

```php
public update(int $passId, string $firstName, string $lastName, string $carModel, string $carNumber, int $officeId): mixed
```

`api/v3/passes/{passId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$passId` | **int** | Идентификатор пропуска |
| `$firstName` | **string** | Имя водителя |
| `$lastName` | **string** | Фамилия водителя |
| `$carModel` | **string** | Марка машины |
| `$carNumber` | **string** | Номер машины |
| `$officeId` | **int** | Идентификатор склада |





***

### delete

Удалить пропуск

```php
public delete(int $passId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$passId` | **int** | Идентификатор пропуска |





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
