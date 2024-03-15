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
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\V2;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Traits\ContentV2Category;
use Whatis\WBAPI\Attribute\Mapping;

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
 * @link     https://github.com/TheWhatis/WBAPI
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
     * @return mixed
     */
    #[Mapping('cards/trash')]
    public function list(
        array $sort,
        array $filter,
        array $cursor,
        string $locale = 'en'
    ): mixed {
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
     * @return mixed
     */
    #[Mapping('cards/recover')]
    public function recover(array $nmIDs): mixed
    {
        return $this->request(
            'POST', 'cards/recover', [
                'nmIDs' => $nmIDs
            ]
        );
    }
}
