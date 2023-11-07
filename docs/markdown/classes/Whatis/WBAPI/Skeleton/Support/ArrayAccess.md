***

# ArrayAccess

Трейт реализующий ArrayAccess

Чтобы изменить название свойства,
которое будет использоваться для
работы с массивом (по-умолчанию
\- `data`), необходимо
установить свойство
`$property`

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Support\ArrayAccess`

**See Also:**

* https://github.com/TheWhatis/Settings - 




## Methods


### offsetSet

Установить новое значение

```php
public offsetSet(mixed $offset, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | Ключ |
| `$value` | **mixed** | Значение |




***

### offsetExists

Проверить есть ли значение
в массиве

```php
public offsetExists(mixed $offset): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | Ключ |




***

### offsetUnset

Удалить значение из массива

```php
public offsetUnset(mixed $offset): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | Ключ |




***

### offsetGet

Получить значение

```php
public offsetGet(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | Ключ |




***

***
> Automatically generated from source code comments on 2023-11-07 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

