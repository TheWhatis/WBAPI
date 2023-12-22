***

# Builder

Интерфейс сервиса

PHP version 8

* Full name: `\Whatis\WBAPI\Builder`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### token

Токен

```php
protected string $token
```






***

### services

Используемые сервисы

```php
protected array&lt;int,array&gt; $services
```






***

## Methods


### __construct

Иницилизировать конструктор

```php
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |





***

### useService

Использовать сервис

```php
public useService(string $name, string $alias = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название сервиса |
| `$alias` | **string** | Его псевдоним для использования |





***

### build

Собрать фасад

```php
public build(): \Whatis\WBAPI\ServiceFacade
```












***


***
> Automatically generated on 2023-12-22
