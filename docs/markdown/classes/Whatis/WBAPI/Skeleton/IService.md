***

# IService

Интерфейс сервиса

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\IService`

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 



## Methods


### __construct

Иницилизация сервиса

```php
public __construct(string|\Whatis\WBAPI\Skeleton\IClient $tokenOrClient): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokenOrClient` | **string&#124;\Whatis\WBAPI\Skeleton\IClient** | Токен |




***

### getType

Получить тип сервиса

```php
public static getType(): \Whatis\WBAPI\Skeleton\ServiceType
```



* This method is **static**.







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
