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
use Whatis\WBAPI\Attribute\Mapping;
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
     * @return mixed
     */
    #[Mapping('tags')]
    public function get(): mixed
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
     * @return mixed
     */
    #[Mapping('tag')]
    public function create(
        string $name,
        string $color = 'D1CFD7'
    ): mixed {
        if (!in_mixed($color, $this->colors)) {
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
     * @return mixed
     */
    #[Mapping('tag/{$id}')]
    public function update(
        int $id,
        string $name = null,
        string $color = null
    ): mixed {
        if ($color && !in_mixed($color, $this->colors)) {
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
     * @return mixed
     */
    #[Mapping('tag/{$id}')]
    public function delete(int $id): mixed
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
     * @return mixed
     */
    #[Mapping('tag/nomenclature/link')]
    public function manage(int $nmID, array $tagsIds): mixed
    {
        return $this->request(
            'POST', 'tag/nomenclature/link', [
                'nmID' => $nmID,
                'tagsIds' => $tagsIds
            ]
        );
    }
}
