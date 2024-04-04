***

# Prices

Класс-сервис для работы
с ценами

PHP version 8

* Full name: `\Whatis\WBAPI\V2\Prices`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/WBAPI - 




## Methods


### getPermissions

Получить массив необходимых разрешений
для этого сервиса

```php
public static getPermissions(): \Whatis\WBAPI\Permissions
```



* This method is **static**.








***

### basePath

Получить базовый uri

```php
public static basePath(): string
```



* This method is **static**.








***

### domain

Получить корректный домен для сервиса

```php
public static domain(): string
```



* This method is **static**.








***

### get

Получение информации о товарах (ценах)

```php
public get(int $limit = 10, int $offset, int $filterNmID = null): mixed
```

`api/v2/list/goods/filter`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** | Ограничение по количество элементов |
| `$offset` | **int** | Сколько элементов пропустить |
| `$filterNmID` | **int** | Артикул Wildberries для поиска товара |





***

### getSizes

Получение информации о размерах товаров (ценах)

```php
public getSizes(int $nmID, int $limit = 10, int $offset): mixed
```

`api/v2/list/goods/size/nm`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nmID` | **int** | Артикул Wildberries |
| `$limit` | **int** | Ограничение по количество элементов |
| `$offset` | **int** | Сколько элементов пропустить |





***

### set

Загрузка цен

```php
public set(array $prices): mixed
```

`api/v2/upload/task`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prices` | **array** | Массив с новыми ценами |





***

### setSizes

Загрузка цен для размеров

```php
public setSizes(array $prices): mixed
```

`api/v2/upload/task/size`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prices` | **array** | Массив с новыми ценами |





***


## Inherited methods


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

### basePath

Получить базовый uri

```php
public static basePath(): string
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
