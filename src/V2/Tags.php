<?php
/**
 * Файл с классом-сервисом для
 * работы с тегами
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\V2;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Traits\ContentV2Category;
use RuntimeException;

/**
 * Класс-сервис для работы
 * с тегами
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Tags extends BaseService
{
    use ContentV2Category;

    /**
     * Список доступных сцетов для тегов
     *
     * @param array
     */
    public array $colors = [
        'D1CFD7',
        'FEE0E0',
        'ECDAFF',
        'E4EAFF',
        'DEF1DD',
        'FFECC7'
    ];

    /**
     * Получить список тегов продавца
     *
     * `content/v2/tags`
     *
     * @return array
     */
    public function get(): array
    {
        return $this->request('GET', 'tags');
    }

    /**
     * Создать тег
     *
     * `content/v2/tag`
     *
     * @param string $name  Название тега
     * @param string $color Цвет тега
     *
     * @return array
     */
    public function create(
        string $name,
        string $color = 'D1CFD7'
    ): array {
        if (!in_array($color, $this->colors)) {
            throw new RuntimeException(
                'Argument $color must be in \''
                    . implode(', ', $this->colors) . '\''
            );
        }

        return $this->request(
            'POST', 'tag', [
                'color' => $color,
                'name' => $name
            ]
        );
    }

    /**
     * Изменить тег
     *
     * `content/v2/tag/{id}`
     *
     * @param int    $id    Идентификатор тега
     * @param string $name  Название тега
     * @param string $color Цвет тега
     *
     * @return array
     */
    public function update(
        int $id,
        string $name = null,
        string $color = null
    ): array {
        if ($color && !in_array($color, $this->colors)) {
            throw new RuntimeException(
                'Argument $color must be in \''
                    . implode(', ', $this->colors) . '\''
            );
        }

        $params = [];
        if (!is_null($name)) {
            $params['name'] = $name;
        }
        if (!is_null($color)) {
            $params['color'] = $color;
        }

        return $this->request('POST', "tag/{$id}", $params);
    }

    /**
     * Удалить тег
     *
     * `content/v2/tag`
     *
     * @param int $id Идентификатор тега
     *
     * @return array
     */
    public function delete(int $id): array
    {
        return $this->request('DELETE', "tag/{$id}");
    }

    /**
     * Упрвление тегами в КТ
     *
     * Позволяет добавить теги к КТ
     * и снять их с КТ
     *
     * `content/v2/tag/nomenclature/link`
     *
     * @param int   $nmID    Артикул wildberries
     * @param array $tagsIds Массив идентификаторов тегов
     *
     * @return array
     */
    public function manage(int $nmID, array $tagsIds): array
    {
        return $this->request(
            'POST', 'tag/nomenclature/link', [
                'nmID' => $nmID,
                'tagsIds' => $tagsIds
            ]
        );
    }
}
