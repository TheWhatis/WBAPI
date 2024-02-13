
***

# Documentation



This is an automatically generated documentation for **Documentation**.


## Namespaces


### \Whatis\WBAPI

#### Classes

| Class | Description |
|-------|-------------|
| [`Permissions`](./classes/Whatis/WBAPI/Permissions.md) | Интерфейс сервиса|
| [`ServiceManager`](./classes/Whatis/WBAPI/ServiceManager.md) | Класс для управления<br />классами-сервисами<br />для wb api|
| [`Utils`](./classes/Whatis/WBAPI/Utils.md) | Класс с вспомогательными методами|




### \Whatis\WBAPI\Attribute

#### Classes

| Class | Description |
|-------|-------------|
| [`Mapping`](./classes/Whatis/WBAPI/Attribute/Mapping.md) | Трейт с реализацией<br />интерфейса `IService`|




### \Whatis\WBAPI\Exceptions

#### Classes

| Class | Description |
|-------|-------------|
| [`PermissionsDoesNotExistsException`](./classes/Whatis/WBAPI/Exceptions/PermissionsDoesNotExistsException.md) | Исключение, возникающее<br />когда у токена недостаточно<br />прав для работы с сервисом|
| [`ServiceAlreadyExists`](./classes/Whatis/WBAPI/Exceptions/ServiceAlreadyExists.md) | Исключение, возникающее когда<br />сервис уже существует|
| [`ServiceNotFound`](./classes/Whatis/WBAPI/Exceptions/ServiceNotFound.md) | Исключение, возникающее<br />когда сервис не найден в<br />менеджере|




### \Whatis\WBAPI\Formatters

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayFormatter`](./classes/Whatis/WBAPI/Formatters/ArrayFormatter.md) | Форматировщик тела ответа,<br />чтобы получить массив|
| [`BaseFormatter`](./classes/Whatis/WBAPI/Formatters/BaseFormatter.md) | Абстракный класс форматировщика json<br />для ответов и запросов от api, с<br />реализацией основных методов|
| [`StdClassFormatter`](./classes/Whatis/WBAPI/Formatters/StdClassFormatter.md) | Форматировщик тела ответа,<br />чтобы получить stdClass|


#### Traits

| Trait | Description |
|-------|-------------|
| [`MultiEncodeTrait`](./classes/Whatis/WBAPI/Formatters/MultiEncodeTrait.md) | Трейт с реализованным методом<br />для закодирования переданных данных<br />в string json или StreamInterface|
| [`WithContextTrait`](./classes/Whatis/WBAPI/Formatters/WithContextTrait.md) | Трейт, с реализованным методом<br />для установки контекста<br />выполнения форматировщика|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IJsonFormatter`](./classes/Whatis/WBAPI/Formatters/IJsonFormatter.md) | Интерфейс форматировщика ответа и запроса<br />от api, чтобы получить определённый<br />формат данных|



### \Whatis\WBAPI\Http

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseClient`](./classes/Whatis/WBAPI/Http/BaseClient.md) | Абстрактный класс клиента<br />для wildberries api|
| [`Client`](./classes/Whatis/WBAPI/Http/Client.md) | Основной класс клиента<br />wildberries api|
| [`Payload`](./classes/Whatis/WBAPI/Http/Payload.md) | Класс полезной нагрузки<br />для создания запросов из<br />клиента `IClient`|


#### Traits

| Trait | Description |
|-------|-------------|
| [`TClient`](./classes/Whatis/WBAPI/Http/TClient.md) | Трейт, реализующий `IClient`|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IClient`](./classes/Whatis/WBAPI/Http/IClient.md) | Интерфейс клиента<br />для wildberries api|



### \Whatis\WBAPI\Service

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseService`](./classes/Whatis/WBAPI/Service/BaseService.md) | Абстрактный класс сервиса<br />для wildberries api|
| [`Payload`](./classes/Whatis/WBAPI/Service/Payload.md) | Класс полезной нагрузки<br />для создания запросов из<br />сервиса `IService`|


#### Traits

| Trait | Description |
|-------|-------------|
| [`TService`](./classes/Whatis/WBAPI/Service/TService.md) | Трейт с реализацией<br />интерфейса `IService`|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IService`](./classes/Whatis/WBAPI/Service/IService.md) | Интерфейс сервиса|



### \Whatis\WBAPI\Traits



#### Traits

| Trait | Description |
|-------|-------------|
| [`ContentCategory`](./classes/Whatis/WBAPI/Traits/ContentCategory.md) | Трейт для установки<br />базового начального<br />uri content/|
| [`ContentV2Category`](./classes/Whatis/WBAPI/Traits/ContentV2Category.md) | Трейт для установки<br />базового начального<br />uri content/|
| [`MarketplaceCategory`](./classes/Whatis/WBAPI/Traits/MarketplaceCategory.md) | Трейт для установки<br />базового начального<br />uri api/|
| [`MarketplaceV3Category`](./classes/Whatis/WBAPI/Traits/MarketplaceV3Category.md) | Трейт для установки<br />базового начального<br />uri api/v3/|




### \Whatis\WBAPI\V1

#### Classes

| Class | Description |
|-------|-------------|
| [`Prices`](./classes/Whatis/WBAPI/V1/Prices.md) | Класс-сервис для работы<br />с ценами|
| [`Statistics`](./classes/Whatis/WBAPI/V1/Statistics.md) | Класс-сервис для работы<br />со статистикой|




### \Whatis\WBAPI\V2

#### Classes

| Class | Description |
|-------|-------------|
| [`Config`](./classes/Whatis/WBAPI/V2/Config.md) | Класс-сервис для работы<br />с конфигурацией контента|
| [`Media`](./classes/Whatis/WBAPI/V2/Media.md) | Класс-сервис для работы<br />с медиаконтентом|
| [`Tags`](./classes/Whatis/WBAPI/V2/Tags.md) | Класс-сервис для работы<br />с тегами|
| [`Trash`](./classes/Whatis/WBAPI/V2/Trash.md) | Класс-сервис для работы<br />с корзиной|
| [`Upload`](./classes/Whatis/WBAPI/V2/Upload.md) | Класс-сервис для работы<br />с загрузкой контента|
| [`View`](./classes/Whatis/WBAPI/V2/View.md) | Класс-сервис для работы<br />с просмотром контента|




### \Whatis\WBAPI\V3

#### Classes

| Class | Description |
|-------|-------------|
| [`Orders`](./classes/Whatis/WBAPI/V3/Orders.md) | Класс-сервис для работы<br />со сборочными заданиями|
| [`Passes`](./classes/Whatis/WBAPI/V3/Passes.md) | Класс-сервис для работы<br />с пропусками|
| [`Stocks`](./classes/Whatis/WBAPI/V3/Stocks.md) | Класс-сервис для работы<br />с остатками|
| [`Supplies`](./classes/Whatis/WBAPI/V3/Supplies.md) | Класс-сервис для работы<br />с поставками|
| [`Warehouses`](./classes/Whatis/WBAPI/V3/Warehouses.md) | Класс-сервис для работы<br />со складами|




***
> Automatically generated on 2024-02-13
