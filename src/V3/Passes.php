<?php
/**
 * Файл с классом-сервисом для
 * работы с пропусками
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
 * с пропусками
 *
 * PHP version 8
 *
 * @category V3
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class Passes extends BaseService
{
    use MarketplaceV3Category;

    /**
     * Получить список складов, для которых
     * требуется пропуск
     *
     * `api/v3/passes/offices`
     *
     * @return mixed
     */
    #[Mapping('passes/offices')]
    public function offices(): mixed
    {
        return $this->request(
            'GET', 'passes/offices'
        );
    }

    /**
     * Получить список пропусков продавца
     *
     * `api/v3/passes`
     *
     * @return mixed
     */
    #[Mapping('passes')]
    public function get(): mixed
    {
        return $this->request(
            'GET', 'passes'
        );
    }

    /**
     * Создать пропуск
     *
     * `api/v3/passes`
     *
     * @param string $firstName Имя водителя
     * @param string $lastName  Фамилия водителя
     * @param string $carModel  Марка машины
     * @param string $carNumber Номер машины
     * @param int    $officeId  Идентификатор склада
     *
     * @return mixed
     */
    #[Mapping('passes')]
    public function create(
        string $firstName,
        string $lastName,
        string $carModel,
        string $carNumber,
        int $officeId,
    ): mixed {
        return $this->request(
            'POST', 'passes', [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'carModel' => $carModel,
                'carNumber' => $carNumber,
                'officeId' => $officeId
            ]
        );
    }

    /**
     * Создать пропуск
     *
     * `api/v3/passes/{passId}`
     *
     * @param int    $passId    Идентификатор пропуска
     * @param string $firstName Имя водителя
     * @param string $lastName  Фамилия водителя
     * @param string $carModel  Марка машины
     * @param string $carNumber Номер машины
     * @param int    $officeId  Идентификатор склада
     *
     * @return mixed
     */
    #[Mapping('passes/{$passId}')]
    public function update(
        int $passId,
        string $firstName,
        string $lastName,
        string $carModel,
        string $carNumber,
        int $officeId,
    ): mixed {
        return $this->request(
            'PUT', "passes/{$passId}", [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'carModel' => $carModel,
                'carNumber' => $carNumber,
                'officeId' => $officeId
            ]
        );
    }

    /**
     * Удалить пропуск
     *
     * @param int $passId Идентификатор пропуска
     *
     * @return mixed
     */
    #[Mapping('passes/{$passId}')]
    public function delete(int $passId): mixed
    {
        return $this->request(
            'DELETE', "passes/{$passId}"
        );
    }
}
