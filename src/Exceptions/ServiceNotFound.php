<?php
/**
 * Файл с трейтом, реализующим
 * интерфейса `IService`
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

use Whatis\WBAPI\ServiceFacade;

use Exception;
use Throwable;

/**
 * Трейт с реализацией
 * интерфейса `IService`
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
    /**
     * Название
     *
     * @var string
     */
    protected string $name;

    /**
     * Карта
     *
     * @var array
     */
    protected array $mapping;

    /**
     * Иницилизация исключения
     *
     * @param string     $name     Название неверного сервиса
     * @param array      $mapping  Карта названий и сервисов
     * @param ?Throwable $previous Предыдущее исключение
     */
    public function __construct(
        string $name, array $mapping, ?Throwable $previous = null
    ) {
        parent::__construct(
            sprintf(
                'Service does not exists in \'%s\' Facade '
                    . 'with name \'%s\'',
                ServiceFacade::class, $name
            ), 0, $previous
        );

        $this->name = $name;
        $this->mapping = $mapping;
    }

    /**
     * Получить название
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Получить карту
     *
     * @return array
     */
    public function getMapping(): array
    {
        return $this->mapping;
    }
}
