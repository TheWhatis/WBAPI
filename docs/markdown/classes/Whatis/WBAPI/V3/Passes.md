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
public offices(): mixed
```

`api/v3/passes/offices`










***

### get

Получить список пропусков продавца

```php
public get(): mixed
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
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |





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

### withFormatter

Установить форматировщик

```php
public withFormatter(\Whatis\WBAPI\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\WBAPI\Formatters\IJsonFormatter** | Форматировщик |





***

### getFormatter

Получить форматировщик

```php
public getFormatter(): \Whatis\WBAPI\Formatters\IJsonFormatter
```












***

### withRequestFactory

Установить фабрику запросов

```php
public withRequestFactory(\Psr\Http\Message\RequestFactoryInterface $factory): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\Psr\Http\Message\RequestFactoryInterface** | Фабрика запросов |





***

### getRequestFactory

Получить фабрику запросов

```php
public getRequestFactory(): \Psr\Http\Message\RequestFactoryInterface
```












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
> Automatically generated on 2024-02-13
