***

# Warehouses

Класс-сервис для работы
со складами

PHP version 8

* Full name: `\Whatis\WBAPI\V3\Warehouses`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### wbGet

Получить список склаов WB

```php
public wbGet(): array
```

`api/v3/offices`










***

### get

Получить список складов продавца

```php
public get(): array
```

`api/v3/warehouses`










***

### create

Создать склад продавца

```php
public create(string $name, int $officeId): array
```

`api/v3/warehouses`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название склада |
| `$officeId` | **int** | Идентификатор склада WB |





***

### update

Обновить склад продавца

```php
public update(int $warehouseId, string $name, int $officeId): mixed
```

`api/v3/warehouses/{warehouseId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$warehouseId` | **int** | Идентификатор склада продавца |
| `$name` | **string** | Новое название склада |
| `$officeId` | **int** | Идентификатор склада WB |





***

### delete

Удалить склад продавца

```php
public delete(int $warehouseId): mixed
```

`api/v3/warehouses/{warehouseId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$warehouseId` | **int** | Идентификатор склада продавца |





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
