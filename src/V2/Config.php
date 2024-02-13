<?php
/**
 * Файл с классом-сервисом для
 * работы с конфигурацией
 * контента
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

/**
 * Класс-сервис для работы
 * с конфигурацией контента
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Config extends BaseService
{
    use ContentV2Category;

    /**
     * Получить список предметов
     *
     * `content/v2/object/all`
     *
     * @param string $name     Поиск по названию категории
     * @param int    $limit    Ограничение по количеству выдачи
     * @param string $locale   Параметр для выобра языка
     * @param int    $offset   Номер позиции с которой получать ответ
     * @param int    $parentID Идентификатор родельской категории
     *
     * @return mixed
     */
    public function getObjects(
        string $name = null,
        int $limit = 1000,
        string $locale = 'en',
        int $offset = 0,
        int $parentID = null,
    ): mixed {
        $params = [
            'limit' => $limit,
            'offset' => $offset,
            'locale' => $locale
        ];

        if (!is_null($name)) {
            $params['name'] = $params;
        }

        if (!is_null($parentID)) {
            $params['parentID'] = $parentID;
        }

        return $this->request('GET', 'object/all', $params);
    }

    /**
     * Получить родительские категории товаров
     *
     * `content/v2/object/parent/all`
     *
     * @param string $locale Параметр для выбора языка
     *
     * @return mixed
     */
    public function getParentCategories(string $locale = 'en'): mixed
    {
        return $this->request('GET', 'object/parent/all', [
            'locale' => $locale
        ]);
    }

    /**
     * Характеристики для создания карточки товара
     * по всем категориям
     *
     * `content/v2/object/charcs/{subjectId}`
     *
     * @param int    $subjectId Идентификатор предмета
     * @param string $locale    Параметр для выбора языка
     *
     * @return mixed
     */
    public function getObjectCharcs(
        string $subjectId, string $locale = 'en'
    ): mixed {
        return $this->request('GET', "object/charcs/{$subjectId}", [
            'locale' => $locale
        ]);
    }

    /**
     * Получение значения характеристики цвет
     *
     * `content/v2/directory/colors`
     *
     * @param string $locale Параметр выбора языка
     *
     * @return mixed
     */
    public function getColors(string $locale = 'en'): mixed
    {
        return $this->request('GET', 'directory/colors', [
            'locale' => $locale
        ]);
    }

    /**
     * Получение значения характеристики пол
     *
     * `content/v2/directory/kinds`
     *
     * @param string $locale Параметр выбора языка
     *
     * @return mixed
     */
    public function getKinds(string $locale = 'en'): mixed
    {
        return $this->request('GET', 'directory/kinds', [
            'locale' => $locale
        ]);
    }

    /**
     * Получение характеристики страна
     * производства
     *
     * `content/v2/directory/countries`
     *
     * @param string $locale Параметр выбора языка
     *
     * @return mixed
     */
    public function getCountries(string $locale = 'en'): mixed
    {
        return $this->request('GET', 'directory/countries', [
            'locale' => $locale
        ]);
    }

    /**
     * Получение значения характеристики сезон
     *
     * `content/v2/directory/seasons`
     *
     * @param string $locale Параметр выбора языка
     *
     * @return mixed
     */
    public function getSeasons(string $locale = 'en'): mixed
    {
        return $this->request('GET', 'directory/seasons', [
            'locale' => $locale
        ]);
    }

    /**
     * Получение ТНВЭД кодов
     *
     * `content/v2/directory/tnved`
     *
     * @param int    $subjectID Идентификатор предмета
     * @param string $search    Поиск по ТНВЭД коду
     * @param string $locale    Параметр выбора языка
     *
     * @return mixed
     */
    public function getTnved(
        int $subjectID,
        string $search,
        string $locale = 'en'
    ): mixed {
        return $this->request('GET', 'directory/tnved', [
            'subjectID' => $subjectID,
            'search' => $search,
            'locale' => $locale
        ]);
    }

    /**
     * Получить значения ставки НДС
     *
     * `content/v2/directory/vat`
     *
     * @param string $locale Параметр выбора языка
     *
     * @return mixed
     */
    public function getVat(string $locale = 'en'): mixed
    {
        return $this->request('GET', 'directory/vat', [
            'locale' => $locale
        ]);
    }

}
