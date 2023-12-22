***

# Client

Основной класс клиента
wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Client`
* Parent class: [`\Whatis\WBAPI\Client\BaseClient`](./Client/BaseClient.md)

**See Also:**

* https://github.com/TheWhatis/WBAPI - 






## Inherited methods


### __construct

Иницилизация клиента

```php
public __construct(string $token, string $domain, string $baseUri = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен Wildberries |
| `$domain` | **string** | Домен по которому обращаться |
| `$baseUri` | **string** | Стандартный uri |





***

### request

Выполнить запрос к wb api

```php
public request(string $method, string $uri, array $data = null, array $query = [], array $headers = [], array $multipart = []): array
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
> Automatically generated on 2023-12-22
