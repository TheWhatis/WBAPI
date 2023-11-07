***

# BasePaginated

Абстрактный класс, реализующий
основные методы интерфейса
`IPaginated` (использует
трейт `TPaginated`)

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Data\BasePaginated`
* Parent class: [`\Whatis\WBAPI\Skeleton\Data\BaseCollection`](./BaseCollection.md)
* This class implements:
[`\Whatis\WBAPI\Skeleton\Data\IPaginated`](./IPaginated.md)
* This class is an **Abstract class**

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 






## Inherited methods


### asGenerator

Создать генератор для циклического
получения данных из wildberries api,
которые разбиты на пакеты

```php
public asGenerator(): \Generator
```











***

### count

Установить новое значение

```php
public count(): int
```











***

### __construct

Иницилизация данных

```php
public __construct(array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Опции |




***

### wrap

Завернуть в "оболочку"
единицу данных

```php
public wrap(mixed $data, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | Переданные данные |
| `$options` | **array** | Опции, переданные в __construct |




***

### toArray

Конвертировать в массив

```php
public toArray(): array
```











***

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
> Automatically generated from source code comments on 2023-11-07 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
