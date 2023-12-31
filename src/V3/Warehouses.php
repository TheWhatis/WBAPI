<?php
/**
 * Файл с классом-сервисом для
 * работы со складами
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

/**
 * Класс-сервис для работы
 * со складами
 *
 * PHP version 8
 *
 * @category V3
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Warehouses extends BaseService
{
    use MarketplaceV3Category;

    /**
     * Получить список склаов WB
     *
     * `api/v3/offices`
     *
     * @return array
     */
    public function wbGet(): array
    {
        return $this->request('GET', 'offices');
    }

    /**
     * Получить список складов продавца
     *
     * `api/v3/warehouses`
     *
     * @return array
     */
    public function get(): array
    {
        return $this->request('GET', 'warehouses');
    }

    /**
     * Создать склад продавца
     *
     * `api/v3/warehouses`
     *
     * @param string $name     Название склада
     * @param int    $officeId Идентификатор склада WB
     *
     * @return array
     */
    public function create(string $name, int $officeId): array
    {
        return $this->request(
            'POST', 'warehouses', [
                'name' => $name,
                'officeId' => $officeId
            ]
        );
    }

    /**
     * Обновить склад продавца
     *
     * `api/v3/warehouses/{warehouseId}`
     *
     * @param int    $warehouseId Идентификатор склада продавца
     * @param string $name        Новое название склада
     * @param int    $officeId    Идентификатор склада WB
     *
     * @return mixed
     */
    public function update(
        int $warehouseId,
        string $name,
        int $officeId
    ): mixed {
        return $this->request(
            'PUT', "warehouses/{$warehouseId}", [
                'name' => $name,
                'officeId' => $officeId
            ]
        );
    }

    /**
     * Удалить склад продавца
     *
     * `api/v3/warehouses/{warehouseId}`
     *
     * @param int $warehouseId Идентификатор склада продавца
     *
     * @return mixed
     */
    public function delete(int $warehouseId): mixed
    {
        return $this->request('DELETE', "warehouses/{$warehouseId}");
    }
}
