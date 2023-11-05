<?php
/**
 * Файл с интерфейсом сервиса
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */

namespace Whatis\WBAPI\Skeleton;

/**
 * Интерфейс сервиса
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
interface IService
{
    /**
     * Иницилизация сервиса
     *
     * @param string|IClient $tokenOrClient Токен
     */
    public function __construct(string|IClient $tokenOrClient);

    /**
     * Получить тип сервиса
     *
     * @return ServiceType
     */
    public static function getType(): ServiceType;

    /**
     * Воспроизвести запрос
     *
     * @param ...$args Аргументы для запроса Request
     *
     * @return array
     */
    public function request(...$args): array;
}
