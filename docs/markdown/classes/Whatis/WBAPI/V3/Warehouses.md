***

# Warehouses

Класс-сервис для работы
со складами

PHP version 8

* Full name: `\Whatis\WBAPI\V3\Warehouses`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/WBAPI - 




## Methods


### wbGet

Получить список склаов WB

```php
public wbGet(): mixed
```

`api/v3/offices`










***

### get

Получить список складов продавца

```php
public get(): mixed
```

`api/v3/warehouses`










***

### create

Создать склад продавца

```php
public create(string $name, int $officeId): mixed
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
> Automatically generated on 2024-03-15
