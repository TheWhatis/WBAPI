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
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\V3;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Traits\MarketplaceV3Category;
use Whatis\WBAPI\Attribute\Mapping;

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
 * @link     https://github.com/TheWhatis/WBAPI
 */
class Warehouses extends BaseService
{
    use MarketplaceV3Category;

    /**
     * Получить список склаов WB
     *
     * `api/v3/offices`
     *
     * @return mixed
     */
    #[Mapping('offices')]
    public function wbGet(): mixed
    {
        return $this->request('GET', 'offices');
    }

    /**
     * Получить список складов продавца
     *
     * `api/v3/warehouses`
     *
     * @return mixed
     */
    #[Mapping('warehouses')]
    public function get(): mixed
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
     * @return mixed
     */
    #[Mapping('warehouses')]
    public function create(string $name, int $officeId): mixed
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
    #[Mapping('warehouses/{$warehouseId}')]
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
    #[Mapping('warehouses/{$warehouseId}')]
    public function delete(int $warehouseId): mixed
    {
        return $this->request('DELETE', "warehouses/{$warehouseId}");
    }
}
