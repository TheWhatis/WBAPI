<?php
/**
 * Файл с классом-сервисом для
 * работы со статистикой
 *
 * PHP version 8
 *
 * @category V1
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\V1;

use Whatis\WBAPI\Permissions;
use Whatis\WBAPI\Enums\Permission;
use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Service\Payload;
use Whatis\WBAPI\Attribute\Mapping;
use DateTime;

/**
 * Класс-сервис для работы
 * со статистикой
 *
 * PHP version 8
 *
 * @category V1
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class Statistics extends BaseService
{
    /**
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    public static function getPermissions(): Permissions
    {
        return new Permissions(Permission::Statistics);
    }

    /**
     * Получить домен для обращения
     *
     * @return string
     */
    public static function domain(): string
    {
        return 'statistics-api.wildberries.ru';
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return 'api/v1/supplier';
    }

    /**
     * Получение статистики поставок
     *
     * `api/v1/supplier/incomes`
     *
     * @param DateTime|string $dateFrom Дата и время последнего
     *                                  изменения поставок
     *
     * @return mixed
     */
    #[Mapping('incomes')]
    public function supplier(DateTime|string $dateFrom): mixed
    {
        return $this->request('GET', 'incomes', Payload::byParams([
            'dateFrom' => is_string($dateFrom)
                ? $dateFrom
                : $dateFrom->format('Y-m-d\TH:i:s.u\Z')
        ]));
    }

    /**
     * Получение остатков товаров
     * на складах
     *
     * `api/v1/supplier/stocks`
     *
     * @param DateTime|string $dateFrom Дата и время последнего
     *                                  изменения по товару
     *
     * @return mixed
     */
    #[Mapping('stocks')]
    public function stocks(DateTime|string $dateFrom): mixed
    {
        return $this->request('GET', 'stocks', Payload::byParams([
            'dateFrom' => is_string($dateFrom)
                ? $dateFrom
                : $dateFrom->format('Y-m-d\TH:i:s.u\Z')
        ]));
    }

    /**
     * Получение статистики заказов
     *
     * `api/v1/supplier/orders`
     *
     * @param DateTime|string $dateFrom Дата и время последнего
     *                                  изменения по товару
     * @param int             $flag     Флаг по поиску
     *
     * @return mixed
     */
    #[Mapping('orders')]
    public function orders(
        DateTime|string $dateFrom,
        int $flag = 0
    ): mixed {
        return $this->request('GET', 'orders', Payload::byParams([
            'dateFrom' => is_string($dateFrom)
                ? $dateFrom
                : $dateFrom->format('Y-m-d\TH:i:s.u\Z'),
            'flag' => $flag
        ]));
    }

    /**
     * Получение статистики продаж
     * и возвратов
     *
     * `api/v1/supplier/sales`
     *
     * @param DateTime|string $dateFrom Дата и время последнего
     *                                  изменения продажи/возврата
     * @param int             $flag     Флаг по поиску
     *
     * @return mixed
     */
    #[Mapping('sales')]
    public function sales(
        DateTime|string $dateFrom,
        int $flag = 0
    ): mixed {
        return $this->request('GET', 'sales', Payload::byParams([
            'dateFrom' => is_string($dateFrom)
                ? $dateFrom
                : $dateFrom->format('Y-m-d\TH:i:s.u\Z'),
            'flag' => $flag
        ]));
    }

    /**
     * Отчет о продажах по реализации
     *
     * `api/v1/supplier/reportDetailByPeriod`
     *
     * @param DateTime|string $dateFrom Начальная дата отчета
     * @param DateTime|string $dateTo   Конечная дата отчета
     * @param int             $limit    Максимальное количество строк
     * @param int             $rrdid    Идентификатор строки отчета
     *
     * @return mixed
     */
    #[Mapping('reportDetailByPeriod')]
    public function reportDetailByPeriod(
        DateTime|string $dateFrom,
        DateTime|string $dateTo,
        int $limit = 10000,
        int $rrdid = 0
    ): mixed {
        return $this->request(
            'GET', 'reportDetailByPeriod', Payload::byParams([
                'dateFrom' => is_string($dateFrom)
                    ? $dateFrom
                    : $dateFrom->format('Y-m-d\TH:i:s.u\Z'),
                'dateTo' => is_string($dateTo)
                    ? $dateTo
                    : $dateTo->format('Y-m-d\TH:i:s.u\Z'),
                'limit' => $limit,
                'rrdid' => $rrdid
            ])
        );
    }
}
