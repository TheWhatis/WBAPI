***

# BaseClient

Абстрактный класс клиента
для wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\BaseClient`
* This class implements:
[`\Whatis\WBAPI\Skeleton\IClient`](./IClient.md)
* This class is an **Abstract class**

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 






## Inherited methods


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
public request(string $method, string $uri, array $data = []): array
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
