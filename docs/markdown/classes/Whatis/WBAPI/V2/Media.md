***

# Media

Класс-сервис для работы
с медиаконтентом

PHP version 8

* Full name: `\Whatis\WBAPI\V2\Media`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### update

Обновление медиа-контента карточки товара

```php
public update(string $vendorCode, array $data): array
```

`content/v2/media/save`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vendorCode` | **string** | Артикул продавца |
| `$data` | **array** | Ссылки на изображения |





***

### addFile

Обновление медиа-контента карточки товара

```php
public addFile(string $vendorCode, int $photoNumber, string|resource $uploadFile): array
```

`content/v2/media/file`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vendorCode` | **string** | Артикул продавца |
| `$photoNumber` | **int** | Номер изображения |
| `$uploadFile` | **string&#124;resource** | Контент или файл для<br />загрузки |





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
