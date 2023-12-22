***

# BaseClient

Абстрактный класс клиента
для wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Client\BaseClient`
* This class implements:
[`\Whatis\WBAPI\Client\IClient`](./IClient.md)
* This class is an **Abstract class**

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 






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
