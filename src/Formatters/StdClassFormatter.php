<?php
/**
 * Файл с форматировщиком тела ответа,
 * чтобы получить stdClass
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

use stdClass;
use Throwable;

/**
 * Форматировщик тела ответа,
 * чтобы получить stdClass
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class StdClassFormatter extends BaseFormatter
{
    /**
     * Декодировать строку json в
     * необходимый формат
     *
     * @param string $content Контент
     *
     * @return array|stdClass
     */
    public function decode(string $content): array|stdClass
    {
        if ($content === '') {
            return new stdClass;
        }

        try {
            $decoded = json_decode(
                $content, false, 512, JSON_THROW_ON_ERROR
            );
        } catch (Throwable) {
            $this->throwInvalidJson($content);
        }

        if (!is_a($decoded, stdClass::class) && !is_array($decoded)) {
            $this->throwInvalidJson($content);
        }

        return $decoded;
    }
}
