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

use Whatis\WBAPI\Service\IService;
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
final class ServiceFacade
{
    /**
     * Карта, связывающая пути
     * до сервисов (их имена)
     * и классы сервисов
     *
     * @var array
     */
    public static array $mapping = [];

    /**
     * Используемый токен
     *
     * @var string
     */
    protected string $token;

    /**
     * Используемые сервисы
     *
     * @var array<int, IService>
     */
    protected array $services = [];

    /**
     * Иницилизировать фасад
     *
     * @param string $token    Токен
     * @param array  $services Массив с назвнаиями сервисов
     *                         (и их алиасов)
     */
    public function __construct(string $token, array $services)
    {
        $this->token = $token;

        foreach ($services as $possibleName => $name) {
            $alias = $name;
            if (is_string($possibleName)) {
                $name = $possibleName;
            }

            $service = static::getService($name, $token);
            $this->services[$alias] = $service;
        }
    }

    /**
     * Получить класс сервиса по названию
     *
     * @param string $name Название
     *
     * @return string Клаcc сервиса
     * @throw  ServiceNotFound
     */
    public static function get(string $name): string
    {
        if (array_key_exists($name, static::$mapping)) {
            return static::$mapping[$name];
        }

        throw new ServiceNotFound($name, static::$mapping);
    }

    /**
     * Получить иницилизированный сервис
     * по его названию
     *
     * @param string $name  Название
     * @param string $token Токен
     *
     * @return IService Сервис
     */
    public static function getService(
        string $name, string $token
    ): IService {
        $service = static::get($name);

        try {
            return new $service($token);
        } catch (InvalidArgumentException $exception) {
            throw new InvalidArgumentException(
                sprintf(
                    $exception->getMessage()
                        . '. Using  name: \'%s\'', $name
                ), $exception->getCode(), $exception
            );
        }
    }

    /**
     * Установить новый сервис
     *
     * @param string $name    Название
     * @param string $service Класс сервиса
     *
     * @return void
     * @throw  ServiceAlreadyExists
     * @throw  InvalidArgumentException
     */
    public static function set(string $name, string $service): void
    {
        if (array_key_exists($name, static::$mapping)) {
            throw new ServiceAlreadyExists(
                $name, static::$mapping
            );
        }

        if (is_a($service, IService::class, true)) {
            static::$mapping[$name] = $service;
            return;
        }

        throw new InvalidArgumentException(
            sprintf(
                'Parameter $service must implements \'%s\'. '
                    . 'Passed class: \'%s\'',
                IService::class, $service
            )
        );
    }

    /**
     * Создать текущий объект
     *
     * @param string $token Токен
     *
     * @return Builder Билдер
     */
    public static function make(string $token): Builder
    {
        return new Builder($token);
    }

    /**
     * Иницилизация нового класса
     *
     * @param string $name  Название
     * @param string $alias Используемый алиас
     *
     * @return static
     */
    public function initNew(
        string $name, string $alias = null
    ): static {
        $alias = $alias ?? $name;
        if (array_key_exists($alias, $this->services)) {
            throw new ServiceAlreadyExists($alias, $this->services);
        }

        $service = static::getService($name, $this->token);
        $this->services[$alias] = $service;

        return $this;
    }

    /**
     * Использовать определённый иницилизированный
     * сервис
     *
     * @param string $name Название используемого сервиса
     *
     * @return IService Сервис
     * @throw  ServiceNotFound
     */
    public function use(string $name): IService
    {
        if (array_key_exists($name, $this->services)) {
            return $this->services[$name];
        }

        throw new ServiceNotFound($name, $this->services);
    }
}
