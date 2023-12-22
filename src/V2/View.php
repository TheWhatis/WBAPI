<?php
/**
 * Файл с классом-сервисом для
 * работы с просмотром контента
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
use RuntimeException;

/**
 * Класс-сервис для работы
 * с просмотром контента
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class View extends BaseService
{
    use ContentV2Category;

    /**
     * Список номенклатур
     *
     * `content/v2/get/cards/list`
     *
     * @param array $cursor Элемент пагинации
     * @param array $filter Фильтры для поиска
     * @param array $sort   Сортировка
     *
     * @return array
     */
    public function list(
        array $cursor,
        array $filter = [],
        array $sort = null
    ): array {
        if (!array_key_exists('limit', $cursor)) {
            throw new RuntimeException(
                '\'limit\' key is required in cursor'
            );
        }

        if (!is_int($cursor['limit'])) {
            throw new RuntimeException(
                'Value by \'limit\' key in cursor key must be integer'
            );
        }

        if (!array_key_exists('withPhoto', $filter)) {
            $filter['withPhoto'] = -1;
        }

        if ($cursor['limit'] > 1000) {
            throw new RuntimeException(
                'Limit \'limit\' cursor argument'
                    . 'must be less then 1000'
            );
        }

        $params = [
            'cursor' => $cursor,
            'filter' => $filter
        ];
        if (!is_null($sort)) {
            $params['sort'] = $sort;
        }

        return $this->request(
            'POST', 'get/cards/list', [
                'settings' => $params
            ]
        );
    }

    /**
     * Список несозданных номенклатур с ошибками
     *
     * `content/v2/cards/error/list`
     *
     * @param string $locale Параметр выбора языка вывода
     *
     * @return array
     */
    public function errList(string $locale = 'en'): array
    {
        return $this->request(
            'GET', 'cards/error/list', [
                'locale' => $locale
            ]
        );
    }

    /**
     * Получить лимиты по карточкам товаров
     *
     * `content/v2/cards/limits`
     *
     * @return array
     */
    public function getLimits(): array
    {
        return $this->request('GET', 'cards/limits');
    }
}
