***

# TClient

Трейт, реализующий `IClient`

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\TClient`

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 



## Properties


### client

Клиент guzzle

```php
public \GuzzleHttp\Client $client
```






***

## Methods


### __construct

Иницилизация клиента

```php
public __construct(string $token, \Whatis\WBAPI\Skeleton\ServiceType $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен Wildberries |
| `$type` | **\Whatis\WBAPI\Skeleton\ServiceType** | Тип сервиса |




***

### request

Выполнить запрос к wb api

```php
public request(string $method, string $uri, array $data): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Метод |
| `$uri` | **string** | URI запроса |
| `$data` | **array** | Данные |




***

***
> Automatically generated from source code comments on 2023-11-05 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
