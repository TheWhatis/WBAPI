<?php
/**
 * Файл с классом-сервисом для
 * работы с поставками
 *
 * PHP version 8
 *
 * @category V3
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\V3;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Traits\MarketplaceV3Category;
use Whatis\WBAPI\Attribute\Mapping;
use RuntimeException;

/**
 * Класс-сервис для работы
 * с поставками
 *
 * PHP version 8
 *
 * @category V3
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class Supplies extends BaseService
{
    use MarketplaceV3Category;

    /**
     * Создать новую поставку
     *
     * `api/v3/supplies`
     *
     * @param string $name Название поставки
     *
     * @return mixed
     */
    #[Mapping('supplies')]
    public function new(string $name): mixed
    {
        return $this->request(
            'POST', 'supplies', ['name' => $name]
        );
    }

    /**
     * Получить список поставок
     *
     * `api/v3/supplies`
     *
     * @param int $limit Лимит по количеству данных
     * @param int $next  Параметр пагинации
     *
     * @return mixed
     */
    #[Mapping('supplies')]
    public function get(int $limit = 10, int $next = 0): mixed
    {
        return $this->request(
            'GET', 'supplies', [
                'limit' => $limit,
                'next' => $next,
            ]
        );
    }

    /**
     * Добавить к поставке сборочное задание
     *
     * `api/v3/supplies/{supplyId}/orders/{orderId}`
     *
     * @param string $supplyId Идентификатор поставки
     * @param int    $orderId  Идентификатор сборочного задания
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/orders/{$orderId}')]
    public function addOrder(string $supplyId, int $orderId): mixed
    {
        return $this->request(
            'PATCH', "supplies/{$supplyId}/orders/{$orderId}"
        );
    }

    /**
     * Получить информацию о поставке
     *
     * `api/v3/supplies/{supplyId}`
     *
     * @param string $supplyId Идентификатор поставки
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}')]
    public function byId(string $supplyId): mixed
    {
        return $this->request(
            'GET', "supplies/{$supplyId}"
        );
    }

    /**
     * Удалить поставку
     *
     * `api/v3/supplies/{supplyId}`
     *
     * @param string $supplyId Идентификатор поставки
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}')]
    public function cancel(string $supplyId): mixed
    {
        return $this->request(
            'DELETE', "supplies/{$supplyId}"
        );
    }

    /**
     * Получить сборочные задания в поставке
     *
     * `api/v3/supplies/{supplyId}/orders`
     *
     * @param string $supplyId Идентификатор поставки
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/orders')]
    public function orders(string $supplyId): mixed
    {
        return $this->request(
            'GET', "supplies/{$supplyId}/orders"
        );
    }

    /**
     * Передать поставку в доставку
     *
     * `api/v3/supplies/{supplyId}/orders`
     *
     * @param string $supplyId Идентификатор поставки
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/deliver')]
    public function toDeliver(string $supplyId): mixed
    {
        return $this->request(
            'PATCH', "supplies/{$supplyId}/deliver"
        );
    }

    /**
     * Получить QR-код поставки
     *
     * `api/v3/supplies/{supplyId}/barcode`
     *
     * @param string $supplyId Идентификатор поставки
     * @param string $type     Тип этикетки
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/barcode')]
    public function barcode(string $supplyId, string $type): mixed
    {
        return $this->request(
            'GET', "supplies/{$supplyId}/barcode", query: [
                'type' => $type
            ]
        );
    }

    /**
     * Получить список коробов поставки
     *
     * `api/v3/supplies/{supplyId}/trbx`
     *
     * @param string $supplyId Идентификатор поставки
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/trbx')]
    public function getTrbx(string $supplyId): mixed
    {
        return $this->request(
            'GET', "supplies/{$supplyId}/trbx"
        );
    }

    /**
     * Добавить короба к поставке
     *
     * `api/v3/supplies/{supplyId}/trbx`
     *
     * @param string $supplyId Идентификатор поставки
     * @param array  $amount   Количество коробов, которые
     *                         необходимо добавить к поставке
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/trbx')]
    public function setTrbx(string $supplyId, array $amount): mixed
    {
        if (count($amount) > 1000) {
            throw new RuntimeException(
                'Count amount must be less then 1000'
            );
        }

        return $this->request(
            'POST', "supplies/{$supplyId}/trbx", [
                'amount' => $amount
            ]
        );
    }

    /**
     * Удалить короба из поставки
     *
     * `api/v3/supplies/{supplyId}/trbx`
     *
     * @param string $supplyId Идентификатор поставки
     * @param array  $trbxIds  Список идентификаторов коробов
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/trbx')]
    public function deleteTrbx(
        string $supplyId,
        array $trbxIds
    ): mixed {
        return $this->request(
            'DELETE', "supplies/{$supplyId}/trbx", [
                'trbxIds' => $trbxIds
            ]
        );
    }

    /**
     * Добавить заказы к коробу
     *
     * `api/v3/supplies/{supplyId}/trbx/{trbxId}`
     *
     * @param string $supplyId Идентификатор поставки
     * @param string $trbxId   Список идентификаторов коробов
     * @param array  $orderIds Список идентификаторов заказов
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/trbx/{$trbxId}')]
    public function addOrdersToTrbx(
        string $supplyId,
        string $trbxId,
        array $orderIds
    ): mixed {
        return $this->request(
            'PATCH', "supplies/{$supplyId}/trbx/{$trbxId}", [
                'orderIds' => $orderIds
            ]
        );
    }

    /**
     * Удалить заказ из короба
     *
     * `api/v3/supplies/{supplyId}/trbx/{trbxId}/orders/{orderId}`
     *
     * @param string $supplyId Идентификатор поставки
     * @param string $trbxId   Список идентификаторов коробов
     * @param int    $orderId  Идентификатор заказа
     *
     * @return mixed
     */
    #[Mapping(
        'supplies/{$supplyId}/trbx/{$trbxId}/orders/{$orderId}'
    )]
    public function removeOrderFromTrbx(
        string $supplyId,
        string $trbxId,
        int $orderId
    ): mixed {
        return $this->request(
            'DELETE', "supplies/{$supplyId}/trbx/{$trbxId}" .
                "/orders/{$orderId}"
        );
    }

    /**
     * Получить стикеры коробов поставки
     *
     * `api/v3/supplies/{supplyId}/trbx/stickers`
     *
     * @param string $supplyId Идентификатор поставки
     * @param string $type     Тип этикетки
     * @param array  $trbxIds  Список идентификаторов коробов
     *
     * @return mixed
     */
    #[Mapping('supplies/{$supplyId}/trbx/stickers')]
    public function trbxStickers(
        string $supplyId,
        string $type,
        array $trbxIds
    ): mixed {
        return $this->request(
            'POST', "supplies/{$supplyId}/trbx/stickers", [
                'trbxIds' => $trbxIds
            ], ['type' => $type]
        );
    }
}
