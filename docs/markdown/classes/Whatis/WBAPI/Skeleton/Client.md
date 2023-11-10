***

# Client

Основной класс клиента
wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Client`
* Parent class: [`\Whatis\WBAPI\Skeleton\BaseClient`](./BaseClient.md)

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 






## Inherited methods


### __construct

Иницилизация клиента

```php
public __construct(string $token, \Whatis\WBAPI\Skeleton\ServiceType $type, string $baseUri = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен Wildberries |
| `$type` | **\Whatis\WBAPI\Skeleton\ServiceType** | Тип сервиса |
| `$baseUri` | **string** | Стандартный uri |




***

### request

Выполнить запрос к wb api

```php
public request(string $method, string $uri, array $data = [], array $query = [], array $headers = [], array $multipart = []): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Метод |
| `$uri` | **string** | URI запроса |
| `$data` | **array** | Данные |
| `$query` | **array** | Данные для uri данных GET |
| `$headers` | **array** |  |
| `$multipart` | **array** |  |




***


***
> Automatically generated from source code comments on 2023-11-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
