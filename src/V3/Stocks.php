<?php
/**
 * Файл с классом-сервисом для
 * работы с остатками
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
use RuntimeException;

/**
 * Класс-сервис для работы
 * с остатками
 *
 * PHP version 8
 *
 * @category V3
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Stocks extends BaseService
{
    use MarketplaceV3Category;

    /**
     * Обновить остатки товаров
     *
     * `api/v3/stocks/{warehouseId}`
     *
     * @param int   $warehouseId Идентификатор склада продавца
     * @param array $stocks      Баркоды товаров и их остатки
     *
     * @return mixed
     */
    public function update(int $warehouseId, array $stocks): mixed
    {
        if (count($stocks) > 1000) {
            throw new RuntimeException(
                'Count stocks must be less then 1000'
            );
        }

        return $this->request(
            'PUT', "stocks/{$warehouseId}", [
                'stocks' => $stocks
            ]
        );
    }

    /**
     * Удалить остатки товаров
     *
     * `api/v3/stocks/{warehouseId}`
     *
     * @param int   $warehouseId Идентификатор склада продавца
     * @param array $skus        Баркоды товаров
     *
     * @return mixed
     */
    public function delete(int $warehouseId, array $skus): mixed
    {
        if (count($skus) > 1000) {
            throw new RuntimeException(
                'Count stocks must be less then 1000'
            );
        }

        return $this->request(
            'DELETE', "stocks/{$warehouseId}", [
                'skus' => $skus
            ]
        );
    }

    /**
     * Получить остатки товаров
     *
     * `api/v3/stocks/{warehouseId}`
     *
     * @param int   $warehouseId Идентификатор склада продавца
     * @param array $skus        Баркоды товаров
     *
     * @return mixed
     */
    public function get(int $warehouseId, array $skus): mixed
    {
        if (count($skus) > 1000) {
            throw new RuntimeException(
                'Count stocks must be less then 1000'
            );
        }

        return $this->request(
            'POST', "stocks/{$warehouseId}", [
                'skus' => $skus
            ]
        );
    }
}
