***

# BaseData

Абстрактный класс для работы с
данными wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\BaseData`
* This class implements:
[`\Whatis\WBAPI\Skeleton\ArrayAccess`](./ArrayAccess.md), [`\Whatis\WBAPI\Skeleton\Iterator`](./Iterator.md)
* This class is an **Abstract class**

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 




## Methods


### __construct

Иницилизация данных

```php
public __construct(array $options): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Опции |




***

### toArray

Конвертировать в массив

```php
public toArray(): array
```




* This method is **abstract**.






***


## Inherited methods


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

### rewind

Вернуть позицию в начало

```php
public rewind(): void
```











***

### valid

Проверить существует ли элемент
по позиции в массиве

```php
public valid(): bool
```











***

### current

Получить текущий элемент

```php
public current(): mixed
```











***

### key

Получить ключ элемента

```php
public key(): string|int
```











***

### next

Перейти к следующей позиции в массиве

```php
public next(): void
```











***


***
> Automatically generated from source code comments on 2023-11-05 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
