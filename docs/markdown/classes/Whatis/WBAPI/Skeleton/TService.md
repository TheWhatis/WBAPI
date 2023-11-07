***

# TService

Трейт с реализацией
интерфейса `IService`

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\TService`

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 



## Properties


### client

Клиент

```php
public \Whatis\WBAPI\Skeleton\IClient $client
```






***

## Methods


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
public request( $args): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **** | Аргументы для запроса Request |




***

***
> Automatically generated from source code comments on 2023-11-07 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

