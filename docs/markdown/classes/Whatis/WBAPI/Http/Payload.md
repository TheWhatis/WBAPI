***

# Payload

Класс полезной нагрузки
для создания запросов из
клиента `IClient`

Имеет все необходимые данные
для запроса

PHP version 8

* Full name: `\Whatis\WBAPI\Http\Payload`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### method

Метод

```php
public \Whatis\WBAPI\Enums\HttpMethod $method
```






***

### domain

Домен

```php
public string $domain
```






***

### path

Путь до ресурса

```php
public string $path
```






***

### headers

Заголовки для запроса

```php
public array $headers
```






***

### params

Параметры

```php
public array $params
```






***

### body

Тело запроса

```php
public mixed $body
```






***

## Methods


### __construct

Создание экземпляра полезной нагрузки

```php
public __construct(\Whatis\WBAPI\Enums\HttpMethod $method, string $domain, string $path, array $headers, array $params, mixed $body): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\Whatis\WBAPI\Enums\HttpMethod** | Метод |
| `$domain` | **string** | Домен |
| `$path` | **string** | Путь |
| `$headers` | **array** | Заголовки |
| `$params` | **array** | Параметры |
| `$body` | **mixed** | Тело запроса |





***


***
> Automatically generated on 2024-03-11
