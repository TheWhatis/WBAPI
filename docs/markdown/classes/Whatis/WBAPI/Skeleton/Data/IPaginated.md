***

# IPaginated

Интерфейс для реализации
данных, которые разбиты
на пакеты данных и их
возможно получить порционно

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Data\IPaginated`

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 



## Methods


### next

Получить следующий пакет
заказов

```php
public next(): \Whatis\WBAPI\Skeleton\Data\BaseData
```











***

### getNext

Получить опцию `next` для следующего
пакета данных

```php
public getNext(): ?int
```











***

### asGenerator

Создать генератор для циклического
получения данных из wildberries api,
которые разбиты на пакеты

```php
public asGenerator(): \Generator
```











***


***
> Automatically generated from source code comments on 2023-11-05 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
