***

# AssocIterator

Трейт реализующий Iterator

Трейт который реализует
интерфейс Iterator для
ассоциативного массива

Чтобы изменить название свойства,
которое будет использоваться для
работы с массивом (по-умолчанию
\- `array`), необходимо
установить свойство
`$property`

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Support\AssocIterator`

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 




## Methods


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

