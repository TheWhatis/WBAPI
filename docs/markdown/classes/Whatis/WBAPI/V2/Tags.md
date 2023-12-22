***

# Tags

Класс-сервис для работы
с тегами

PHP version 8

* Full name: `\Whatis\WBAPI\V2\Tags`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 



## Properties


### colors

Список доступных сцетов для тегов

```php
public array $colors
```






***

## Methods


### get

Получить список тегов продавца

```php
public get(): array
```

`content/v2/tags`










***

### create

Создать тег

```php
public create(string $name, string $color = &#039;D1CFD7&#039;): array
```

`content/v2/tag`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название тега |
| `$color` | **string** | Цвет тега |





***

### update

Изменить тег

```php
public update(int $id, string $name = null, string $color = null): array
```

`content/v2/tag/{id}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** | Идентификатор тега |
| `$name` | **string** | Название тега |
| `$color` | **string** | Цвет тега |





***

### delete

Удалить тег

```php
public delete(int $id): array
```

`content/v2/tag`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** | Идентификатор тега |





***

### manage

Упрвление тегами в КТ

```php
public manage(int $nmID, array $tagsIds): array
```

Позволяет добавить теги к КТ
и снять их с КТ

`content/v2/tag/nomenclature/link`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nmID` | **int** | Артикул wildberries |
| `$tagsIds` | **array** | Массив идентификаторов тегов |





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
