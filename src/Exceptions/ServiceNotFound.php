<?php
/**
 * Файл с исключением, возникающим
 * когда сервиса не существует
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Exceptions;

use Exception;

/**
 * Исключение, возникающее когда
 * сервиса не существует
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class ServiceNotFound extends Exception
{
    // ...
}
