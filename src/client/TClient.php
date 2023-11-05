<?php
/**
 * Файл с трейтом, реализующим
 * `IClient`
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\Skeleton;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\RequestOptions;

/**
 * Трейт, реализующий `IClient`
 *
 * PHP version 8
 *
 * @category Skeleton
 * @package  WBAPI
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
     * Иницилизация клиента
     *
     * @param string      $token Токен Wildberries
     * @param ServiceType $type  Тип сервиса
     */
    public function __construct(string $token, ServiceType $type)
    {
        $this->type = $type;
        $this->client = new GuzzleClient(
            [
                'base_uri' => "https://{$type->value}/api/",
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
        array $data = []
    ): array {
        $response = $this->client->request(
            $method, $uri, $method === 'GET'
                ? [RequestOptions::QUERY => $data]
                : [RequestOptions::JSON => $data]
        );

        $answer = $response->getBody()->getContents();
        $answer = json_decode($answer, true);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new \RuntimeException(
                'Invalid json response: ' .
                    $answer
            );
        }

        return $answer;
    }
}
