<?php
/**
 * Файл с абстракным классом форматировщика json
 * для ответов и запросов от api, с
 * реализацией основных методов
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Formatters;

/**
 * Абстракный класс форматировщика json
 * для ответов и запросов от api, с
 * реализацией основных методов
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
abstract class BaseFormatter implements IJsonFormatter
{
    use MultiEncodeTrait;
    use WithContextTrait;
}
