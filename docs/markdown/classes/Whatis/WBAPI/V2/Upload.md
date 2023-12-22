***

# Upload

Класс-сервис для работы
с загрузкой контента

PHP version 8

* Full name: `\Whatis\WBAPI\V2\Upload`
* Parent class: [`\Whatis\WBAPI\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 




## Methods


### update

Обновить карточку товара

```php
public update(array $cards): array
```

Редактирование КТ происходит асинхронно, после
отправки запрос становится в очередь на обработку.

Важно*: Баркоды (skus) не подлежат удалению или замене.
Попытка заменить существующий баркод приведет
к добавлению нового баркода к существующему.

Если запрос прошел успешно, а информация в карточке
не обновилась, значит были допущены ошибки и карточка
попала в "Черновики" (метод cards/error/list)
с описанием ошибок.

Необходимо исправить ошибки в запросе и
отправить его повторно.

Для успешного обновления карточки рекомендуем Вам
придерживаться следующего порядка действий:
1. Сначала существующую карточку
необходимо запросить методом cards/filter.
2. Забираем из ответа массив data.
3. В этом массиве вносим необходимые изменения
и отправляем его в cards/update

`content/v2/cards/update`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cards` | **array** | Список обновленных карточек товара |





***

### create

Создать карточку товара

```php
public create(int $subjectID, array $variants): array
```

Создание карточки товара происходит асинхронно,
при отправке запроса на создание КТ ваш запрос
становится в очередь на создание КТ.

ПРИМЕЧАНИЕ: Карточка товара считается созданной,
если успешно создалась хотя бы одна НМ.

ВАЖНО: Если во время обработки запроса в очереди
выявляются ошибки, то НМ считается ошибочной.

Если запрос на создание прошел успешно, а карточка
не создалась, то необходимо в первую очередь проверить
наличие карточки в методе cards/error/list.

Если карточка попала в ответ к этому методу,
то необходимо исправить описанные ошибки в запросе
на создание карточки и отправить его повторно.

За раз можно создать 1000 КТ по 5 НМ в каждой.

Если Вам требуется больше 5 НМ в КТ, то
после создания карточки Вы можете добавить
их методом "Добавление НМ к КТ".

`content/v2/cards/upload`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subjectID` | **int** | Идентификатор предмета |
| `$variants` | **array** | Массив вариантов товара |





***

### addNm

Добавление номенклатуры к карточке товара

```php
public addNm(int $imtID, array $cardsToAdd): array
```

Добавление НМ к КТ происходит асинхронно,
после отправки запрос становится в
очередь на обработку.

Важно: Если после успешной отправки запроса номенклатура
не создалась, то необходимо проверить раздел
"Список несозданных НМ с ошибками".
Для того чтобы убрать НМ из ошибочных,
необходимо повторно сделать запрос с
исправленными ошибками.

`content/v2/cards/upload/add`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$imtID` | **int** | imtID, к которой добавляется НМ |
| `$cardsToAdd` | **array** | Структура добавляемой НМ |





***

### moveNm

Объединение / Разъединение НМ

```php
public moveNm(int $targetIMT, array $nmIDs): array
```

`content/v2/cards/moveNm`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetIMT` | **int** | Существующий у продавца imtID,<br />под которым необходимо объединить НМ |
| `$nmIDs` | **array** | НМ которые необходимо объеденить |





***

### barcodes

Генерация баркодов

```php
public barcodes(int $count): array
```

`content/v2/barcodes`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** | Количество баркодов, которые необходимо<br />сгенерировать |





***


## Inherited methods


### getBaseUri

Получить базовый uri

```php
public static getBaseUri(): string
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




**Throws:**

- [`PermissionsDoesNotExistsException`](../Exceptions/PermissionsDoesNotExistsException.md)



***

### getDomain

Получить домен для обращения

```php
public static getDomain(): string
```



* This method is **static**.








***

### request

Воспроизвести запрос

```php
public request( $args): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **** | Аргументы для запроса Request |





***


***
> Automatically generated on 2023-12-22
