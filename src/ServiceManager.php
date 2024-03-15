<?php
/**
 * Файл с классом для управления
 * классами-сервисами
 * для wb api
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

use Whatis\WBAPI\Http\IClient;
use Whatis\WBAPI\Http\Client;
use Whatis\WBAPI\Service\IService;
use Whatis\WBAPI\Package\IPackage;

use Whatis\WBAPI\Exceptions\ServiceNotFound;
use Whatis\WBAPI\Exceptions\ServiceAlreadyExists;
use GuzzleHttp\Exception\ClientException;

use BadMethodCallException;
use Throwable;
use Closure;

/**
 * Класс для управления
 * классами-сервисами
 * для wb api
 *
 * PHP version 8
 *
 * @category Main
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
class ServiceManager
{
    /**
     * Генераторы сервисов
     *
     * @var array<string, Closure>
     */
    protected array $creators = [];

    /**
     * Используемые сервисы
     *
     * @var array<int, IService>
     */
    protected array $services = [];

    /**
     * Общий клиент для всех сервисов
     *
     * @var IClient
     */
    public readonly IClient $client;

    /**
     * Иницилизировать менеджер
     *
     * @param IClient|string $clientOrToken Клиент
     */
    public function __construct(IClient|string $clientOrToken)
    {
        $this->client = is_string($clientOrToken)
            ? new Client($clientOrToken)
            : $clientOrToken;
    }

    /**
     * Создать экземпляр этого класса
     * со всеми параметрами
     *
     * @param ...$args Аргументы
     *
     * @return static
     */
    public static function new(...$args): static
    {
        return new static(...$args);
    }

    /**
     * Установить новый сервис (расширить менеджер)
     *
     * @param string         $abstract Абстрактное название
     * @param Closure|string $concrete Конкретика
     *
     * @return static
     * @throw  ServiceAlreadyExists
     */
    public function extend(string $abstract, Closure|string $concrete = null): static
    {
        if ($this->hasService($abstract)) {
            throw new ServiceAlreadyExists(sprintf(
                'Service with [%s] name already exists', $abstract
            ));
        }

        if (!$concrete) {
            $concrete = $abstract;
        }

        if (is_string($concrete)) {
            $concrete = fn ($manager) => new $concrete($manager->client);
        }

        $this->creators[$abstract] = $concrete;
        return $this;
    }

    /**
     * Установить по пакету
     *
     * @param IPackage $package Пакет
     *
     * @return static
     */
    public function package(IPackage $package): static
    {
        foreach ($package as $name => $creator) {
            $this->extend($name, $creator);
        }

        return $this;
    }

    /**
     * Проверить что сервис существует
     *
     * @param string $name Название
     *
     * @return bool
     */
    public function hasService(string $name): bool
    {
        return array_key_exists($name, $this->creators)
            || array_key_exists($name, $this->services);
    }

    /**
     * Получить "генератор" сервиса
     *
     * @param string $name название сервиса
     *
     * @return Closure
     */
    public function creator(string $name): Closure
    {
        if ($this->hasService($name)) {
            return fn () => $this->creators[$name]($this);
        }

        throw new ServiceNotFound(sprintf(
            'Service with [%s] name not found', $name
        ));
    }

    /**
     * Разрешить сервис
     *
     * @param string $name Название сервиса
     *
     * @return IService|ServiceCompositor
     * @throw  ServiceNotFound
     */
    protected function resolve(string $name): IService|ServiceCompositor
    {
        return $this->creator($name)();
    }

    /**
     * Получить сервис
     *
     * @param string $name название сервиса
     *
     * @return IService|ServiceCompositor Сервис
     */
    public function service(string $name): IService|ServiceCompositor
    {
        return $this->services[$name] ??= $this->resolve($name);
    }

    /**
     * Использовать сервис
     *
     * @param string $name Название используемого сервиса
     *
     * @return IService|ServiceCompositor Сервис
     */
    public function use(string $name): IService|ServiceCompositor
    {
        return $this->service($name);
    }

    /**
     * Вызов методов из сервисов
     *
     * @param string $method    Метод
     * @param array  $arguments Аргументы
     *
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        try {
            foreach (Utils::splitCamelCase($method) as $segment) {
                if ($this->hasService($segment)) {
                    break;
                }

                $segment = strtolower($segment);
                if ($this->hasService($segment)) {
                    break;
                }
            }

            $sMethod = lcfirst(str_ireplace($segment, '', $method));
            return $this->use($segment)->$sMethod(...$arguments);
        } catch (ClientException|BadMethodCallException $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new BadMethodCallException(
                sprintf('Method %s::%s does not exists', static::class, $method),
                previous: $exception
            );
        }
    }
}
