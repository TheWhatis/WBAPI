<?php
/**
 * Файл с исключением, возникающим
 * когда сервис уже существует
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
 * сервис уже существует
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class ServiceAlreadyExists extends Exception
{
    // ...
}
