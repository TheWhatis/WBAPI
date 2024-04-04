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
public \Whatis\WBAPI\Formatters\IJsonFormatter $formatter
```






***

### requestFactory

Фабрика запросов

```php
public \Psr\Http\Message\RequestFactoryInterface $requestFactory
```






***

## Methods


### __construct

Иницилизация клиента

```php
public __construct(string $token, ?\Whatis\WBAPI\Http\IJsomFormatter $formatter = null, ?\Psr\Http\Message\RequestFactoryInterface $factory = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен wildberries api |
| `$formatter` | **?\Whatis\WBAPI\Http\IJsomFormatter** | Форматировщик данных |
| `$factory` | **?\Psr\Http\Message\RequestFactoryInterface** | Фабрика запросов |





***

### getToken

Получить токен

```php
public getToken(): string
```












***

### getFormatter

Получить форматер

```php
public getFormatter(): \Whatis\WBAPI\Formatters\IJsonFormatter
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
> Automatically generated on 2024-04-04

