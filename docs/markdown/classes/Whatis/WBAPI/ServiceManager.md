***

# ServiceManager

Класс для управления
классами-сервисами
для wb api

PHP version 8

* Full name: `\Whatis\WBAPI\ServiceManager`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### creators

Генераторы сервисов

```php
protected array&lt;string,\Closure&gt; $creators
```






***

### services

Используемые сервисы

```php
protected array&lt;int,\Whatis\WBAPI\Service\IService&gt; $services
```






***

### client

Общий клиент для всех сервисов

```php
public \Whatis\WBAPI\Http\IClient $client
```






***

## Methods


### __construct

Иницилизировать менеджер

```php
public __construct(\Whatis\WBAPI\Http\IClient|string $clientOrToken): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientOrToken` | **\Whatis\WBAPI\Http\IClient&#124;string** | Клиент |





***

### new

Создать экземпляр этого класса
со всеми параметрами

```php
public static new( $args): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **** | Аргументы |





***

### extend

Установить новый сервис (расширить менеджер)

```php
public extend(string $abstract, \Closure|string $concrete = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$abstract` | **string** | Абстрактное название |
| `$concrete` | **\Closure&#124;string** | Конкретика |




**Throws:**

- [`ServiceAlreadyExists`](./Exceptions/ServiceAlreadyExists.md)



***

### package

Установить по пакету

```php
public package(\Whatis\WBAPI\Package\IPackage $package): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$package` | **\Whatis\WBAPI\Package\IPackage** | Пакет |





***

### hasService

Проверить что сервис существует

```php
public hasService(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |





***

### creator

Получить "генератор" сервиса

```php
public creator(string $name): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | название сервиса |





***

### resolve

Разрешить сервис

```php
protected resolve(string $name): \Whatis\WBAPI\Service\IService|\Whatis\WBAPI\ServiceCompositor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название сервиса |




**Throws:**

- [`ServiceNotFound`](./Exceptions/ServiceNotFound.md)



***

### service

Получить сервис

```php
public service(string $name): \Whatis\WBAPI\Service\IService|\Whatis\WBAPI\ServiceCompositor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | название сервиса |


**Return Value:**

Сервис




***

### use

Использовать сервис

```php
public use(string $name): \Whatis\WBAPI\Service\IService|\Whatis\WBAPI\ServiceCompositor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название используемого сервиса |


**Return Value:**

Сервис




***

### __call

Вызов методов из сервисов

```php
public __call(string $method, array $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Метод |
| `$arguments` | **array** | Аргументы |





***


***
> Automatically generated on 2024-03-15
