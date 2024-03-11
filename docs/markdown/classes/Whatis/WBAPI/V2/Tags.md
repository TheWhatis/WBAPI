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
public get(): mixed
```

`content/v2/tags`










***

### create

Создать тег

```php
public create(string $name, string $color = &#039;D1CFD7&#039;): mixed
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
public update(int $id, string $name = null, string $color = null): mixed
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
public delete(int $id): mixed
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
public manage(int $nmID, array $tagsIds): mixed
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


### basePath

Получить базовый uri

```php
public static basePath(): string
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





***

### throwNotEnoughPermissions

Вывести ошибку о том, что у токена
недостаточно разрешений для работы
этого сервиса

```php
protected throwNotEnoughPermissions(string $token): never
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`PermissionsDoesNotExistsException`](../Exceptions/PermissionsDoesNotExistsException.md)



***

### validateToken

Валидировать токен

```php
protected validateToken(string $token): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException.md)



***

### domain

Получить домен для обращения

```php
public static domain(): string
```



* This method is **static**.








***

### withFormatter

Установить форматировщик

```php
public withFormatter(\Whatis\WBAPI\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\WBAPI\Formatters\IJsonFormatter** | Форматировщик |





***

### getFormatter

Получить форматировщик

```php
public getFormatter(): \Whatis\WBAPI\Formatters\IJsonFormatter
```












***

### withRequestFactory

Установить фабрику запросов

```php
public withRequestFactory(\Psr\Http\Message\RequestFactoryInterface $factory): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\Psr\Http\Message\RequestFactoryInterface** | Фабрика запросов |





***

### getRequestFactory

Получить фабрику запросов

```php
public getRequestFactory(): \Psr\Http\Message\RequestFactoryInterface
```












***

### headers

Получить заголовки из Payload

```php
protected headers(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### params

Получить параметры из Payload

```php
protected params(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### body

Получить тело запроса из Payload

```php
protected body(mixed $payload): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### request

Воспроизвести запрос

```php
public request(string|\Whatis\WBAPI\Enums\HttpMethod $method, string $path, mixed $payload = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string&#124;\Whatis\WBAPI\Enums\HttpMethod** | Метод |
| `$path` | **string** | Путь до запроса |
| `$payload` | **mixed** | Полезная нагрузка запроса |





***


***
> Automatically generated on 2024-03-11
