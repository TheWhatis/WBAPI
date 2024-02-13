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

use Whatis\WBAPI\Service\IService;
use Whatis\WBAPI\Exceptions\ServiceNotFound;
use Whatis\WBAPI\Exceptions\ServiceAlreadyExists;
use Whatis\WBAPI\Formatters\IJsonFormatter;
use Psr\Http\Message\RequestFactoryInterface;

use GuzzleHttp\Exception\ClientException;
use InvalidArgumentException;
use BadMethodCallException;
use Throwable;

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
     * Алиасы сервисов
     *
     * @var array<string, string>
     */
    protected array $aliases = [];

    /**
     * Иницилизировать фасад
     *
     * @param string $token    Токен
     * @param array  $services Массив с назвнаиями сервисов
     *                         (и их алиасов)
     */
    public function __construct(string $token)
    {
        $this->token = $token;
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
        string $name,
        string $token,
    ): IService {
        return new (static::get($name))($token);
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
     * @return static
     */
    public static function make(string $token): static
    {
        return new static($token);
    }

    /**
     * Проверить что сервис уже иницилизирован
     *
     * @param string $name Название
     *
     * @return void
     * @throw  ServiceAlreadyExists
     */
    protected function checkServiceExists(string $name)
    {
        if (array_key_exists($name, $this->services)
            || array_key_exists($name, $this->aliases)
        ) {
            throw new ServiceAlreadyExists($name, $this->services);
        }
    }

    /**
     * Установить alias на сервис
     *
     * @param string   $name Название
     * @param ?string $alias Псевдоним
     *
     * @return static
     */
    public function alias(string $name, ?string $alias): static
    {
        if ($alias) {
            $this->checkServiceExists($alias);
            $this->aliases[$alias] = $name;
        }

        return $this;
    }

    /**
     * Иницилизация нового сервиса
     *
     * @param string $name  Название
     * @param string $alias Используемый алиас
     *
     * @return static
     */
    public function initNew(
        string $name,
        string $alias = null
    ): static {
        $this->checkServiceExists($name);
        $this->alias($name, $alias);
        $this->services[$name] = static::getService(
            $name, $this->token
        );

        return $this;
    }

    /**
     * Проверить что сервис существует
     *
     * @param string $name Название
     *
     * @return bool
     */
    function hasService(string $name): bool
    {
        return array_key_exists($name, $this->services)
            || array_key_exists($name, $this->aliases);
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
        if (!$this->hasService($name)) {
            throw new ServiceNotFound($name, $this->services);
        }

        if (array_key_exists($name, $this->services)) {
            return $this->services[$name];
        }

        return $this->services[$this->aliases[$name]];
    }

    /**
     * Установить форматтер body
     *
     * @param IJsonFormatter $formatter Форматер
     *
     * @return static
     */
    function withFormatter(IJsonFormatter $formatter): static
    {
        foreach ($this->services as $service) {
            $service->withFormatter($formatter);
        }
        return $this;
    }

    /**
     * Установить фабрику запросов
     *
     * @param RequestFactoryInterface $factory Фабрика запросов
     *
     * @return static
     */
    public function withRequestFactory(
        RequestFactoryInterface $factory
    ): static {
        foreach ($this->services as $service) {
            $service->withRequestFactory($factory);
        }
        return $this;
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

        } catch (ClientException $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new BadMethodCallException(
                sprintf(
                    'Method %s::%s does not exists',
                    static::class, $method
                ), $exception->getCode(), $exception
            );
        }
    }
}
