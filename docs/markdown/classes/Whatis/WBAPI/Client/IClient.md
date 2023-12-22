***

# IClient

Интерфейс клиента
для wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Client\IClient`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Methods


### __construct

Иницилизация клиента

```php
public __construct(string $token, string $domain): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен Wildberries |
| `$domain` | **string** | Домен по которому обращаться |





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
| `$headers` | **array** | Доп. заголовки для запроса |
| `$multipart` | **array** | Параметр для передачи файлов |





***


***
> Automatically generated on 2023-12-22
