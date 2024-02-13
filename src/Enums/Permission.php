<?php
/**
 * Файл с перечислением разрешений для токена
 *
 * PHP version 8
 *
 * @category Enums
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Enums;

/**
 * Перечисление разрешений для токена
 *
 * PHP version 8
 *
 * @category Enums
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
enum Permission: int
{
    case Sandbox           = 1 << 0;
    case Content           = 1 << 1;
    case Analytics         = 1 << 2;
    case Marketplace       = 1 << 4;
    case Statistics        = 1 << 5;
    case Promotion         = 1 << 6;
    case Recommendations   = 1 << 8;
    case ReadOnly          = 1 << 30;
    case PricesDiscounts   = 1 << 3;
    case QuestionsFeedback = 1 << 7;

    /**
     * Как строка
     *
     * @return string
     */
    public function asString(): string
    {
        return sprintf(
            '%s::%s; %s', $this::class, $this->name, $this->value
        );
    }
}
