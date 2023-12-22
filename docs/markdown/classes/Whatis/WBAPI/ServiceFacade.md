***

# ServiceFacade

Интерфейс сервиса

PHP version 8

* Full name: `\Whatis\WBAPI\ServiceFacade`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Properties


### mapping

Карта, связывающая пути
до сервисов (их имена)
и классы сервисов

```php
public static array $mapping
```



* This property is **static**.


***

### token

Используемый токен

```php
protected string $token
```






***

### services

Используемые сервисы

```php
protected array&lt;int,\Whatis\WBAPI\Service\IService&gt; $services
```






***

## Methods


### __construct

Иницилизировать фасад

```php
public __construct(string $token, array $services): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |
| `$services` | **array** | Массив с назвнаиями сервисов<br />(и их алиасов) |





***

### get

Получить класс сервиса по названию

```php
public static get(string $name): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |


**Return Value:**

Клаcc сервиса



**Throws:**

- [`ServiceNotFound`](./Exceptions/ServiceNotFound.md)



***

### getService

Получить иницилизированный сервис
по его названию

```php
public static getService(string $name, string $token): \Whatis\WBAPI\Service\IService
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |
| `$token` | **string** | Токен |


**Return Value:**

Сервис




***

### set

Установить новый сервис

```php
public static set(string $name, string $service): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |
| `$service` | **string** | Класс сервиса |




**Throws:**

- [`ServiceAlreadyExists`](./Exceptions/ServiceAlreadyExists.md)

- [`InvalidArgumentException`](../../InvalidArgumentException.md)



***

### make

Создать текущий объект

```php
public static make(string $token): \Whatis\WBAPI\Builder
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |


**Return Value:**

Билдер




***

### initNew

Иницилизация нового класса

```php
public initNew(string $name, string $alias = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |
| `$alias` | **string** | Используемый алиас |





***

### use

Использовать определённый иницилизированный
сервис

```php
public use(string $name): \Whatis\WBAPI\Service\IService
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название используемого сервиса |


**Return Value:**

Сервис



**Throws:**

- [`ServiceNotFound`](./Exceptions/ServiceNotFound.md)



***


***
> Automatically generated on 2023-12-22
