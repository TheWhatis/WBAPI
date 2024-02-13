<?php
/**
 * Файл с трейтом,
 * реализующим `IClient`
 *
 * PHP version 8
 *
 * @category Client
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Http;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\HttpFactory;
use GuzzleHttp\Psr7\MultipartStream;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestFactoryInterface;

use Whatis\WBAPI\Formatters\IJsonFormatter;
use Whatis\WBAPI\Formatters\StdClassFormatter;

/**
 * Трейт, реализующий `IClient`
 *
 * PHP version 8
 *
 * @category Client
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */
trait TClient
{
    /**
     * Токен
     *
     * @var string
     */
    public readonly string $token;

    /**
     * Клиент guzzle
     *
     * @var GuzzleClient
     */
    public readonly GuzzleClient $client;

    /**
     * Используемый форматировщик
     * тела запроса/ответа
     *
     * @var IJsonFormatter
     */
    protected IJsonFormatter $formatter;

    /**
     * Фабрика запросов
     *
     * @var RequestFactoryInterface
     */
    protected RequestFactoryInterface $requestFactory;

    /**
     * Иницилизация клиента
     *
     * @param string $token Токен Wildberries
     */
    public function __construct(string $token)
    {
        $this->token = $token;
        $this->formatter = new StdClassFormatter;
        $this->requestFactory = new HttpFactory;
        $this->client = new GuzzleClient;
    }

    /**
     * Получить токен
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Установить форматтер body
     *
     * @param IJsonFormatter $formatter Форматер
     *
     * @return static
     */
    public function withFormatter(IJsonFormatter $formatter): static
    {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Получить форматер
     *
     * @return IJsonFormatter
     */
    public function getFormatter(): IJsonFormatter
    {
        return $this->formatter;
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
        $this->requestFactory = $factory;
        return $this;
    }

    /**
     * Получить фабрику запросов
     *
     * @return RequestFactoryInterface
     */
    public function getRequestFactory(): RequestFactoryInterface
    {
        return $this->requestFactory;
    }

    /**
     * Получить uri для запроса Request
     *
     * @param Payload $payload Полезная нагрузка
     *
     * @return string
     */
    protected function uri(Payload $payload): string
    {
        return 'https://' . $payload->domain
              . '/' . $payload->path . ($payload->params ? '?' : '')
              . http_build_query($payload->params);
    }


    /**
     * Получить заголовки из payload
     *
     * @return array
     */
    protected function headers(Payload $payload): array
    {
        $contentType = 'application/json';
        if (is_a($payload->body, MultipartStream::class)) {
            $contentType = 'multipart/form-data; boundary='
                         . $payload->body->getBoundary();
        }

        return array_merge(
            $payload->headers, [
                'Host' => $payload->domain,
                'Authorization' => $this->getToken(),
                'Accept' => 'application/json',
                'Content-Type' => $contentType
            ]
        );
    }

    /**
     * Выполнить запрос
     *
     * @param Payload $payload Данные (полезная нагрузка)
     *
     * @return ResponseInterface
     */
    public function request(Payload $payload): ResponseInterface
    {
        $request = $this->getRequestFactory()->createRequest(
            $payload->method->value, $this->uri($payload)
        );

        foreach ($this->headers($payload) as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->client->send(
            $request->withBody(
                $this->getFormatter()
                    ->withContext($request)
                    ->encode($payload->body)
            )
        );
    }
}
