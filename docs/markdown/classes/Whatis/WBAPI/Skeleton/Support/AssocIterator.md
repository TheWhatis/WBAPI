***

# AssocIterator

Трейт реализующий Iterator

Трейт который реализует
интерфейс Iterator для
ассоциативного массива

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Support\AssocIterator`

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 




## Methods


### getArray

Получить массив с данными, с которыми
работает трейт

```php
protected getArray(): array
```




* This method is **abstract**.






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

