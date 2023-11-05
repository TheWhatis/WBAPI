***

# BaseService

Абстрактный класс сервиса
для wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\BaseService`
* This class implements:
[`\Whatis\WBAPI\Skeleton\IService`](./IService.md)
* This class is an **Abstract class**

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 






## Inherited methods


### __construct

Иницилизация сервиса

```php
public __construct(string|\Whatis\WBAPI\Skeleton\IClient $tokenOrClient): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokenOrClient` | **string&#124;\Whatis\WBAPI\Skeleton\IClient** | Токен или клиент |




***

### request

Воспроизвести запрос

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
