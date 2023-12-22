<?php
/**
 * Файл с классом-сервисом для
 * работы с ценами
 *
 * PHP version 8
 *
 * @category V1
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\V1;

use Whatis\WBAPI\Permission;
use Whatis\WBAPI\Permissions;
use Whatis\WBAPI\Service\BaseService;

use RuntimeException;

/**
 * Класс-сервис для работы
 * с ценами
 *
 * PHP version 8
 *
 * @category V1
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Prices extends BaseService
{
    /**
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    public static function getPermissions(): Permissions
    {
        return new Permissions(Permission::PricesDiscounts);
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function baseUri(): string
    {
        return 'public/api/v1/';
    }

    /**
     * Получение информации о ценах
     *
     * `public/api/v1/info`
     *
     * @param int $quantity 1 - товар с ненулевым остатком,
     *                      0 - товар с любым остатком
     *
     * @return array
     */
    public function get(int $quantity = 0): array
    {
        if (!in_array($quantity, [0, 1])) {
            throw new RuntimeException(
                'Quantity argument must have 0 or 1 '
                    . 'integer value'
            );
        }

        return $this->request(
            'GET', 'info', query: [
                'quantity' => $quantity
            ]
        );
    }

    /**
     * Загрузка цен
     *
     * `public/api/v1/prices`
     *
     * @param array $prices Массив с новыми ценами
     *
     * @return array
     */
    public function set(array $prices): array
    {
        if (count($prices) > 1000) {
            throw new RuntimeException(
                'Count prices must be less then 1000'
            );
        }

        return $this->request('POST', 'prices', $prices);
    }
}
