***

# Config

Класс-сервис для работы
с конфигурацией контента

PHP version 8

* Full name: `\Whatis\WBAPI\V2\Config`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### getObjects

Получить список предметов

```php
public getObjects(string $name = null, int $limit = 1000, string $locale = &#039;en&#039;, int $offset, int $parentID = null): mixed
```

`content/v2/object/all`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Поиск по названию категории |
| `$limit` | **int** | Ограничение по количеству выдачи |
| `$locale` | **string** | Параметр для выобра языка |
| `$offset` | **int** | Номер позиции с которой получать ответ |
| `$parentID` | **int** | Идентификатор родельской категории |





***

### getParentCategories

Получить родительские категории товаров

```php
public getParentCategories(string $locale = &#039;en&#039;): mixed
```

`content/v2/object/parent/all`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Параметр для выбора языка |





***

### getObjectCharcs

Характеристики для создания карточки товара
по всем категориям

```php
public getObjectCharcs(int $subjectId, string $locale = &#039;en&#039;): mixed
```

`content/v2/object/charcs/{subjectId}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subjectId` | **int** | Идентификатор предмета |
| `$locale` | **string** | Параметр для выбора языка |





***

### getColors

Получение значения характеристики цвет

```php
public getColors(string $locale = &#039;en&#039;): mixed
```

`content/v2/directory/colors`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Параметр выбора языка |





***

### getKinds

Получение значения характеристики пол

```php
public getKinds(string $locale = &#039;en&#039;): mixed
```

`content/v2/directory/kinds`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Параметр выбора языка |





***

### getCountries

Получение характеристики страна
производства

```php
public getCountries(string $locale = &#039;en&#039;): mixed
```

`content/v2/directory/countries`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Параметр выбора языка |





***

### getSeasons

Получение значения характеристики сезон

```php
public getSeasons(string $locale = &#039;en&#039;): mixed
```

`content/v2/directory/seasons`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Параметр выбора языка |





***

### getTnved

Получение ТНВЭД кодов

```php
public getTnved(int $subjectID, string $search, string $locale = &#039;en&#039;): mixed
```

`content/v2/directory/tnved`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subjectID` | **int** | Идентификатор предмета |
| `$search` | **string** | Поиск по ТНВЭД коду |
| `$locale` | **string** | Параметр выбора языка |





***

### getVat

Получить значения ставки НДС

```php
public getVat(string $locale = &#039;en&#039;): mixed
```

`content/v2/directory/vat`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Параметр выбора языка |





***


## Inherited methods


### basePath

Получить базовый uri

```php
public static basePath(): string
```



* This method is **static**.








***

### __construct

Иницилизация сервиса

```php
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |





***

### throwNotEnoughPermissions

Вывести ошибку о том, что у токена
недостаточно разрешений для работы
этого сервиса

```php
protected throwNotEnoughPermissions(string $token): never
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`PermissionsDoesNotExistsException`](../Exceptions/PermissionsDoesNotExistsException.md)



***

### validateToken

Валидировать токен

```php
protected validateToken(string $token): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException.md)



***

### domain

Получить домен для обращения

```php
public static domain(): string
```



* This method is **static**.








***

### withFormatter

Установить форматировщик

```php
public withFormatter(\Whatis\WBAPI\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\WBAPI\Formatters\IJsonFormatter** | Форматировщик |





***

### getFormatter

Получить форматировщик

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

### headers

Получить заголовки из Payload

```php
protected headers(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### params

Получить параметры из Payload

```php
protected params(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### body

Получить тело запроса из Payload

```php
protected body(mixed $payload): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### request

Воспроизвести запрос

```php
public request(string|\Whatis\WBAPI\Enums\HttpMethod $method, string $path, mixed $payload = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string&#124;\Whatis\WBAPI\Enums\HttpMethod** | Метод |
| `$path` | **string** | Путь до запроса |
| `$payload` | **mixed** | Полезная нагрузка запроса |





***


***
> Automatically generated on 2024-03-11
