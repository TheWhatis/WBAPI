***

# TPaginated

Трейт, реализующий основные
методы интерфейса `IPaginated`

Чтобы изменить название свойства,
которое будет использоваться для
работы с массивом (по-умолчанию
\- `array`), необходимо
установить свойство
`$property`

PHP version 8

* Full name: `\Whatis\WBAPI\Skeleton\Data\TPaginated`

**See Also:**

* https://github.com/TheWhatis/WBApiSkeleton - 




## Methods


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

