***

# IClient

Интерфейс клиента
для wildberries api

PHP version 8

* Full name: `\Whatis\WBAPI\Http\IClient`

**See Also:**

* https://github.com/TheWhatis/WBAPI - 



## Methods


### __construct

Иницилизация клиента

```php
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен Wildberries |





***

### getToken

Получить токен

```php
public getToken(): string
```












***

### withFormatter

Установить форматтер body

```php
public withFormatter(\Whatis\WBAPI\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\WBAPI\Formatters\IJsonFormatter** | Форматер |





***

### getFormatter

Получить форматер

```php
public getFormatter(): \Whatis\WBAPI\Formatters\IJsonFormatter
```












***

### withRequestFactory

Установить фабрику запросов

```php
public withRequestFactory(\Psr\Http\Message\RequestFactoryInterface $factory): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\Psr\Http\Message\RequestFactoryInterface** | Фабрика запросов |





***

### getRequestFactory

Получить фабрику запросов

```php
public getRequestFactory(): \Psr\Http\Message\RequestFactoryInterface
```












***

### request

Выполнить запрос к wb api

```php
public request(\Whatis\WBAPI\Http\Payload $payload): \Psr\Http\Message\ResponseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **\Whatis\WBAPI\Http\Payload** | Данные (полезная нагрузка) |





***


***
> Automatically generated on 2024-02-13
