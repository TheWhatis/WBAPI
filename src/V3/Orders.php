<?php
/**
 * Файл с классом-сервисом для
 * работы со сборочными заданиями
 *
 * PHP version 8
 *
 * @category V3
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\V3;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Traits\MarketplaceV3Category;

use DateTime;
use RuntimeException;

/**
 * Класс-сервис для работы
 * со сборочными заданиями
 *
 * PHP version 8
 *
 * @category V3
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Orders extends BaseService
{
    use MarketplaceV3Category;

    /**
     * Получить новые сборочные задания
     *
     * `api/v3/orders/new`
     *
     * @return array
     */
    public function new(): array
    {
        return $this->request('GET', 'orders/new');
    }

    /**
     * Получить информацию по сборочнм заданиям
     *
     * `api/v3/orders`
     *
     * @param int          $limit Лимит по количеству данных
     * @param int          $next  Параметр пагинации
     * @param DateTime|int $from  Дата начала периода в
     *                            формате unix timestamp
     * @param DateTime|int $to    Дата конца периода в
     *                            формате unix timestamp
     *
     * @return array
     */
    public function get(
        int $limit = 10,
        int $next = 0,
        DateTime|int $from = null,
        DateTime|int $to = null
    ): array {
        return $this->request(
            'GET', 'orders', [
                'limit' => $limit,
                'next' => $next,
                'dateFrom' => $from instanceof DateTime
                    ? $from->getTimestamp() : $from,
                'dateTo' => $to instanceof DateTime
                    ? $to->getTimestamp() : $to
            ]
        );
    }

    /**
     * Получить статусы сборочных заданий
     *
     * `api/v3/orders/status`
     *
     * @param array $orders Идентификаторы сборочных заданий
     *
     * @return array
     */
    public function statuses(array $orders): array
    {
        if (count($orders) > 1000) {
            throw new RuntimeException(
                'Count orders must be less then 1000'
            );
        }

        return $this->request(
            'POST', 'orders/status', [
                'orders' => $orders
            ]
        );
    }

    /**
     * Отменить сборочное задание
     *
     * `api/v3/orders/{orderId}/cancel`
     *
     * @param int $orderId Идентификатор сборочного задания
     *
     * @return array
     */
    public function cancel(int $orderId): array
    {
        return $this->request(
            'PATCH', "orders/{$orderId}/cancel"
        );
    }

    /**
     * Закрепить за сборочным заданием КиЗ
     * (маркировку честного знака)
     *
     * `api/v3/orders/{orderId}/meta/sgtin`
     *
     * @param int   $orderId Идентификатор сборочного задания
     * @param array $sgtin   Массив КиЗов
     *
     * @return array
     */
    public function metaSgtin(int $orderId, array $sgtin): array
    {
        if (count($sgtin) > 24) {
            throw new RuntimeException(
                'Count sgtins must be less then 24'
            );
        }

        return $this->request(
            'POST', "orders/{$orderId}/meta/sgtin", [
                'sgtin' => $sgtin
            ]
        );
    }

    /**
     * Получить этикетки сборочных заданий
     *
     * `api/v3/orders/stickers`
     *
     * @param string $type   Тип этикетки
     * @param int    $width  Ширина этикетки
     * @param int    $height Высота этикетки
     * @param array  $orders Идентификаторы сборочных заданий
     *
     * @return array
     */
    public function stickers(
        string $type,
        int $width,
        int $height,
        array $orders,
    ): array {
        if (count($orders) > 100) {
            throw new RuntimeException(
                'Count orders must be less then 100'
            );
        }

        return $this->request(
            'POST', 'orders/stickers', [
                'orders' => $orders
            ], [
                'type' => $type,
                'width' => $width,
                'height' => $height
            ]
        );
    }

    /**
     * Получить метаданные сборочного задания
     *
     * `api/v3/orders/{orderId}/meta`
     *
     * @param int $orderId Идентификатор сборочного задания
     *
     * @return array
     */
    public function getMeta(int $orderId): array
    {
        return $this->request(
            'GET', "orders/{$orderId}/meta"
        );
    }

    /**
     * Удалить метаданные сборочного задания
     *
     * `api/v3/orders/{orderId}/meta`
     *
     * @param int    $orderId Идентификатор сборочного задания
     * @param string $key     Название метаданных для удаления (
     *                        imei, uin, gtin)
     *
     * @return array
     */
    public function deleteMeta(int $orderId, string $key): array
    {
        return $this->request(
            'DELETE', "orders/{$orderId}/meta", [
                'key' => $key
            ]
        );
    }

    /**
     * Закрепить за сборочным заданием УИН
     * (уникальный идентификационный номер)
     *
     * `api/v3/orders/{orderId}/meta/uin`
     *
     * @param int    $orderId Идентификатор сборочного задания
     * @param string $uin     УИН
     *
     * @return array
     */
    public function metaUin(int $orderId, string $uin): array
    {
        return $this->request(
            'PUT', "orders/{$orderId}/meta/uin", [
                'uin' => $uin
            ]
        );
    }

    /**
     * Закрепить за сборочным заданием IMEI
     *
     * `api/v3/orders/{orderId}/meta/imei`
     *
     * @param int    $orderId Идентификатор сборочного задания
     * @param string $imei    IMEI
     *
     * @return array
     */
    public function metaImei(int $orderId, string $imei): array
    {
        return $this->request(
            'PUT', "orders/{$orderId}/meta/imei", [
                'imei' => $imei
            ]
        );
    }

    /**
     * Закрепить за сборочным заданием GTIN
     *
     * `api/v3/orders/{orderId}/meta/gtin`
     *
     * @param int    $orderId Идентификатор сборочного задания
     * @param string $gtin    GTIN
     *
     * @return array
     */
    public function metaGtin(int $orderId, string $gtin): array
    {
        return $this->request(
            'PUT', "orders/{$orderId}/meta/gtin", [
                'gtin' => $gtin
            ]
        );
    }

    /**
     * Получить список ссылок на этикетки
     * для сборочных заданий, которые
     * требуются при кроссбордере
     *
     * `api/v3/files/orders/external-stickers`
     *
     * @param array $orders Идентификаторы сборочных заданий
     *
     * @return array
     */
    public function externalStickers(array $orders): array
    {
        if (count($orders) > 100) {
            throw new RuntimeException(
                'Count orders must be less then 100'
            );
        }

        return $this->request(
            'POST', "files/orders/external-stickers", [
                'orders' => $orders
            ]
        );
    }
}
