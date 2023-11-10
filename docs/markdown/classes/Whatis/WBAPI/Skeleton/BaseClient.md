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
public request(string $method, string $uri, array $data = [], array $query = [], array $headers = []): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Метод |
| `$uri` | **string** | URI запроса |
| `$data` | **array** | Данные |
| `$query` | **array** | Данные для uri данных GET |
| `$headers` | **array** |  |




***


***
> Automatically generated from source code comments on 2023-11-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
