<?php
/**
 * Файл с трейтом, реализующим
 * `IClient`
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WbApi
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\Skeleton;

use Whatis\WBAPI\ClientType;
use GuzzleHttp\Client as GuzzleClient;

/**
 * Трейт, реализующий `IClient`
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WbApi
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
trait TClient
{
    /**
     * Клиент guzzle
     *
     * @var GuzzleClient
     */
    public GuzzleClient $client;

    /**
     * Тип клиента
     *
     * @var ClientType
     */
    protected ClientType $type;

    /**
     * Иницилизация клиента
     *
     * @param string     $token Токен Wildberries
     * @param ClientType $type  Тип клиента
     */
    public function __construct(string $token, ClientType $type)
    {
        $this->type = $type;
        $this->client = new GuzzleClient(
            [
                'base_uri' => "https://{$type->value}",
                'headers' => [
                    'Host' => $type->value,
                    'Authorization' => $token,
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]
        );
    }

    /**
     * Получить тип клиента
     *
     * @return ClientType
     */
    public function getType(): ClientType
    {
        return $this->type;
    }

    /**
     * Выполнить запрос к wb api
     *
     * @param string $method Метод
     * @param string $uri    URI запроса
     * @param array  $data   Данные
     *
     * @return array
     */
    public function request(
        string $method,
        string $uri,
        array $data
    ): array {
        $body = json_encode($data);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new \RuntimeException(
                'Json encode error:' . json_last_error_msg()
            );
        }

        $response = $this->client->request(
            $method, $uri, ['body' => $body]
        );

        if ($response->getStatusCode() === 200) {
            $decodedResponseContents = json_decode(
                $response->getBody()->getContents(), true
            );
            if (JSON_ERROR_NONE !== json_last_error()) {
                throw new \RuntimeException(
                    'Invalid json response: ' .
                        $decodedResponseContents
                );
            }

            return $decodedResponseContents;
        }

        throw new \RuntimeException(
            'Request sended with status code: ' .
                $response->getStatusCode() . ' and contents' .
                $response->getBody()->getContents()
        );
    }
}
