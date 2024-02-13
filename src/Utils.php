<?php
/**
 * Файл с классом с вспом-ми методами
 *
 * PHP version 8
 *
 * @category Main
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI;

/**
 * Класс с вспомогательными методами
 *
 * PHP version 8
 *
 * @category Main
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class Utils
{
    /**
     * Разделить строку по CamelCase
     *
     * @param string $string Значение
     *
     * @return array
     */
    public static function splitCamelCase(string $string): array
    {
        $regexp = '/(?#! splitCamelCase)
            # Split camelCase "words".
            # Two global alternatives. Either g1of2:
              (?<=[a-z])      # Position is after a lowercase,
              (?=[A-Z])       # and before an uppercase letter.
            | (?<=[A-Z])      # Or g2of2; Position is after uppercase,
              (?=[A-Z][a-z])  # and before upper-then-lower case.
            /x';

        return preg_split($regexp, $string);
    }
}
