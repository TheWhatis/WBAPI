<?php
/**
 * Файл с исключением, возникающим
 * когда у токена недостаточно
 * прав для работы с сервисом
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
 * Исключение, возникающее
 * когда у токена недостаточно
 * прав для работы с сервисом
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class PermissionsDoesNotExistsException extends Exception
{
    // ...
}
