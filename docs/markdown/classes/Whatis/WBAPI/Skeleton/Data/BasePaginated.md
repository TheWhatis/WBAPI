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


***
> Automatically generated from source code comments on 2023-11-05 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
