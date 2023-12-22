***

# Trash

Класс-сервис для работы
с корзиной

PHP version 8

* Full name: `\Whatis\WBAPI\V2\Trash`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### list

Получить список НМ, находящихся
в корзине

```php
public list(array $sort, array $filter, array $cursor, string $locale = &#039;en&#039;): array
```

`content/v2/cards/trash`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sort` | **array** | Сортировка |
| `$filter` | **array** | Фильтры |
| `$cursor` | **array** | Элемент пагинации |
| `$locale` | **string** | Параметр выбора языка |





***

### recover

Восстановление НМ из корзины

```php
public recover(array $nmIDs): array
```

`content/v2/cards/recover`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nmIDs` | **array** | Артикулы WB |





***


## Inherited methods


### getBaseUri

Получить базовый uri

```php
public static getBaseUri(): string
```



* This method is **static**.








***

### __construct

Иницилизация сервиса

```php
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`PermissionsDoesNotExistsException`](../Exceptions/PermissionsDoesNotExistsException.md)



***

### getDomain

Получить домен для обращения

```php
public static getDomain(): string
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
> Automatically generated on 2023-12-22
