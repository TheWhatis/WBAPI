***

# BasePaginated

Абстрактный класс, реализующий
основные методы интерфейса
`IPaginated` (использует
трейт `TPaginated`)

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Data\BasePaginated`
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

### setNext

Установить опцию `next` для следующего
пакета данных

```php
protected setNext(?int $next): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **?int** | Опция `next` |




***


***
> Automatically generated from source code comments on 2023-11-05 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
