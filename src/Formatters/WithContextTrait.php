<?php
/**
 * Файл с трейтом, с реализованным
 * методом для установки контекста
 * выполнения форматировщика
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

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Трейт, с реализованным методом
 * для установки контекста
 * выполнения форматировщика
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
trait WithContextTrait
{
    /**
     * Контекст
     *
     * @var RequestInterface|ResponseInterface|null
     */
    public RequestInterface|ResponseInterface|null $context = null;

    /**
     * Установить контекст выполнения
     *
     * @param RequestInterface|ResponseInterface $context Контекст
     *
     * @return static
     */
    public function withContext(
        RequestInterface|ResponseInterface $context
    ): static {
        $this->context = $context;
        return $this;
    }
}
