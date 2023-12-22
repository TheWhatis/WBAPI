<?php
/**
 * Файл с классом-сервисом для
 * работы с корзиной
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\Content\V2;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Traits\ContentV2Category;

/**
 * Класс-сервис для работы
 * с корзиной
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Trash extends BaseService
{
    use ContentV2Category;

    /**
     * Получить список НМ, находящихся
     * в корзине
     *
     * `content/v2/cards/trash`
     *
     * @param array  $sort   Сортировка
     * @param array  $filter Фильтры
     * @param array  $cursor Элемент пагинации
     * @param string $locale Параметр выбора языка
     *
     * @return array
     */
    public function list(
        array $sort,
        array $filter,
        array $cursor,
        string $locale = 'en'
    ): array {
        return $this->request(
            'POST', 'cards/trash', [
                'sort' => $sort,
                'filter' => $filter,
                'cursor' => $cursor
            ], ['locale' => $locale]
        );
    }

    /**
     * Восстановление НМ из корзины
     *
     * `content/v2/cards/recover`
     *
     * @param array $nmIDs Артикулы WB
     *
     * @return array
     */
    public function recover(array $nmIDs): array
    {
        return $this->request(
            'POST', 'cards/recover', [
                'nmIDs' => $nmIDs
            ]
        );
    }
}
