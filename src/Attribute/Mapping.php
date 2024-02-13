<?php
/**
 * Файл с атрибутом для установки
 * пути до api ресурса
 *
 * PHP version 8
 *
 * @category Attribute
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Attribute;

use Attribute;

/**
 * Атрибут для установки пути
 * до api ресурса
 *
 * Нужен для метода
 * ServiceManager::mapping
 *
 * PHP version 8
 *
 * @category Attribute
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
#[Attribute(Attribute::TARGET_METHOD)]
class Mapping
{
    /**
     * Путь ресурса по которому
     * обращается метод
     *
     * @param string $path
     */
    public string $path;

    /**
     * Создание атрибута
     *
     * @param string $path Путь запроса
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }
}
