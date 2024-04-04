<?php
/**
 * Файл с классом-сервисом для
 * работы с ценами
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\V2;

use Whatis\WBAPI\Permissions;
use Whatis\WBAPI\Enums\Permission;
use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Service\Payload;
use Whatis\WBAPI\Attribute\Mapping;
use RuntimeException;

/**
 * Класс-сервис для работы
 * с ценами
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
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
    public static function basePath(): string
    {
        return 'api/v2/';
    }

    /**
     * Получить корректный домен для сервиса
     *
     * @return string
     */
    public static function domain(): string
    {
        return 'discounts-prices-api.wb.ru';
    }

    /**
     * Получение информации о товарах (ценах)
     *
     * `api/v2/list/goods/filter`
     *
     * @param int $limit      Ограничение по количество элементов
     * @param int $offset     Сколько элементов пропустить
     * @param int $filterNmID Артикул Wildberries для поиска товара
     *
     * @return mixed
     */
    #[Mapping('list/goods/filter')]
    public function get(
        int $limit = 10,
        int $offset = 0,
        int $filterNmID = null
    ): mixed {
        $body = [
            'limit' => $limit,
            'offset' => $offset
        ];

        if ($filterNmID) {
            $body['filterNmID'] = $filterNmID;
        }

        return $this->request('GET', 'list/goods/filter', Payload::byParams($body));
    }

    /**
     * Получение информации о размерах товаров (ценах)
     *
     * `api/v2/list/goods/size/nm`
     *
     * @param int $nmID   Артикул Wildberries
     * @param int $limit  Ограничение по количество элементов
     * @param int $offset Сколько элементов пропустить
     *
     * @return mixed
     */
    #[Mapping('list/goods/size/nm')]
    public function getSizes(
        int $nmID,
        int $limit = 10,
        int $offset = 0,
    ): mixed {
        return $this->request('GET', 'list/goods/size/nm', Payload::byParams([
            'nmID' => $nmID,
            'limit' => $limit,
            'offset' => $offset
        ]));
    }

    /**
     * Загрузка цен
     *
     * `api/v2/upload/task`
     *
     * @param array $prices Массив с новыми ценами
     *
     * @return mixed
     */
    #[Mapping('upload/task')]
    public function set(array $prices): mixed
    {
        if (count($prices) > 1000) {
            throw new RuntimeException(
                'Count prices must be less then 1000'
            );
        }

        return $this->request('POST', 'upload/task', $prices);
    }

    /**
     * Загрузка цен для размеров
     *
     * `api/v2/upload/task/size`
     *
     * @param array $prices Массив с новыми ценами
     *
     * @return mixed
     */
    #[Mapping('upload/task/size')]
    public function setSizes(array $prices): mixed
    {
        if (count($prices) > 1000) {
            throw new RuntimeException(
                'Count prices must be less then 1000'
            );
        }

        return $this->request('POST', 'upload/task/size', $prices);
    }
}
