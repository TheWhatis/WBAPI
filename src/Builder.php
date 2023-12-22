<?php
/**
 * Файл с интерфейсом сервиса
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

use Whatis\WBAPI\Exceptions\ServiceNotFound;
use Whatis\WBAPI\Exceptions\ServiceAlreadyExists;
use InvalidArgumentException;

/**
 * Интерфейс сервиса
 *
 * PHP version 8
 *
 * @category Main
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
final class Builder
{
    /**
     * Токен
     *
     * @var string
     */
    protected string $token;

    /**
     * Используемые сервисы
     *
     * @var array<int, array>
     */
    protected array $services = [];

    /**
     * Иницилизировать конструктор
     *
     * @param string $token Токен
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Использовать сервис
     *
     * @param string $name  Название сервиса
     * @param string $alias Его псевдоним для использования
     *
     * @return static
     */
    public function useService(
        string $name, string $alias = null
    ): static {
        $this->services[] = [ 'name' => $name, 'alias' => $alias ];
        return $this;
    }

    /**
     * Собрать фасад
     *
     * @return ServiceFacade
     */
    public function build(): ServiceFacade
    {
        return new ServiceFacade(
            $this->token, array_combine(
                array_column($this->services, 'name'), array_map(
                    static fn($service) => $service['alias']
                        ?? $service['name'], $this->services
                )
            )
        );
    }
}
