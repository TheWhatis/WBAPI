***

# BasePackage

Файл с абстрактным классом для
пакета (с реализацией основных
методов)

PHP version 8

* Full name: `\Whatis\WBAPI\Package\BasePackage`
* This class implements:
[`\Whatis\WBAPI\Package\IPackage`](./IPackage.md)
* This class is an **Abstract class**

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### packages

Расширения

```php
protected array&lt;string,\Closure&gt; $packages
```






***

## Methods


### __construct

Иницилизация пакета

```php
public __construct(): mixed
```












***

### packages

Получить пакеты

```php
public packages(): array&lt;string,\Closure|string|null&gt;
```




* This method is **abstract**.




**Return Value:**

description




***

### current

Получить генератор сервиса

```php
public current(): \Closure|string|null
```












***

### key

Получить название сервиса

```php
public key(): ?string
```












***

### next

Перейти к след-му пакету

```php
public next(): void
```












***

### rewind

Сбросить указатель

```php
public rewind(): void
```












***

### valid

Проверить что под положением
указателя есть элемент

```php
public valid(): bool
```












***


***
> Automatically generated on 2024-04-04
