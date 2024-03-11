***

# TClient

Трейт, реализующий `IClient`

PHP version 8

* Full name: `\Whatis\WBAPI\Http\TClient`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### token

Токен

```php
public string $token
```






***

### client

Клиент guzzle

```php
public \GuzzleHttp\Client $client
```






***

### formatter

Используемый форматировщик
тела запроса/ответа

```php
protected \Whatis\WBAPI\Formatters\IJsonFormatter $formatter
```






***

### requestFactory

Фабрика запросов

```php
protected \Psr\Http\Message\RequestFactoryInterface $requestFactory
```






***

## Methods


### __construct

Иницилизация клиента

```php
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен Wildberries |





***

### getToken

Получить токен

```php
public getToken(): string
```












***

### withFormatter

Установить форматтер body

```php
public withFormatter(\Whatis\WBAPI\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\WBAPI\Formatters\IJsonFormatter** | Форматер |





***

### getFormatter

Получить форматер

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

### uri

Получить uri для запроса Request

```php
protected uri(\Whatis\WBAPI\Http\Payload $payload): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **\Whatis\WBAPI\Http\Payload** | Полезная нагрузка |





***

### headers

Получить заголовки из payload

```php
protected headers(\Whatis\WBAPI\Http\Payload $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **\Whatis\WBAPI\Http\Payload** |  |





***

### request

Выполнить запрос

```php
public request(\Whatis\WBAPI\Http\Payload $payload): \Psr\Http\Message\ResponseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **\Whatis\WBAPI\Http\Payload** | Данные (полезная нагрузка) |





***

***
> Automatically generated on 2024-03-11

