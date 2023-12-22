***

# View

Класс-сервис для работы
с просмотром контента

PHP version 8

* Full name: `\Whatis\WBAPI\V2\View`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### list

Список номенклатур

```php
public list(array $cursor, array $filter = [], array $sort = null): array
```

`content/v2/get/cards/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursor` | **array** | Элемент пагинации |
| `$filter` | **array** | Фильтры для поиска |
| `$sort` | **array** | Сортировка |





***

### errList

Список несозданных номенклатур с ошибками

```php
public errList(string $locale = &#039;en&#039;): array
```

`content/v2/cards/error/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Параметр выбора языка вывода |





***

### getLimits

Получить лимиты по карточкам товаров

```php
public getLimits(): array
```

`content/v2/cards/limits`










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
