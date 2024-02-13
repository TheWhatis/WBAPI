<?php
/**
 * Абстрактный класс с реализованным
 * методом для загодирования переданных
 * данных в string json или StreamInterface
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
 * Абстрактный класс с реализованным
 * методом для загодирования переданных
 * данных в string json или StreamInterface
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
