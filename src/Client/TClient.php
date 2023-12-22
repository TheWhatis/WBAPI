<?php
/**
 * Файл с трейтом, реализующим
 * `IClient`
 *
 * PHP version 8
 *
 * @category Client
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBAPI
 */

namespace Whatis\WBAPI\Client;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\RequestOptions;

use RuntimeException;

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
     * Используемый домен
     *
     * @var string
     */
    protected string $domain;

    /**
     * Клиент guzzle
     *
     * @var GuzzleClient
     */
    public GuzzleClient $client;

    /**
     * Иницилизация клиента
     *
     * @param string $token   Токен Wildberries
     * @param string $domain  Домен по которому обращаться
     * @param string $baseUri Стандартный uri
     */
    public function __construct(
        string $token,
        string $domain,
        string $baseUri = ''
    ) {
        $this->domain = $domain;
        $this->client = new GuzzleClient([
            'base_uri' => "https://{$domain}/{$baseUri}",
            'headers' => [
                'Host' => $domain,
                'Authorization' => $token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    /**
     * Выполнить запрос к wb api
     *
     * @param string $method Метод
     * @param string $uri    URI запроса
     * @param array  $data   Данные
     * @param array  $query  Данные для uri данных GET
     *
     * @return array
     */
    public function request(
        string $method,
        string $uri,
        array $data = null,
        array $query = [],
        array $headers = [],
        array $multipart = []
    ): array {
        $exp = explode(':', $uri);

        $client = $this->client;
        if (count($exp) === 2) {
            [$domain, $uri] = $exp;
            $client = new GuzzleClient([
                'base_uri' => str_replace(
                    $this->domain, $domain,
                    $client->getOption('base_uri')
                ),
                'headers' => array_merge(
                    $client->getOption('headers'), [
                        'Host' => $domain
                    ]
                )
            ]);
        }

        $response = $client->request(
            $method, $uri, $method === 'GET' ? [
                RequestOptions::QUERY => array_merge(
                    $data ?? [], $query
                ),
                RequestOptions::HEADERS => $headers,
                RequestOptions::MULTIPART => $multipart
            ] : [
                RequestOptions::QUERY => $query,
                RequestOptions::JSON => $data,
                RequestOptions::HEADERS => $headers,
                RequestOptions::MULTIPART => $multipart
            ]
        );

        $answer = $response->getBody()->getContents();
        $answer = json_decode($answer, true);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new RuntimeException(
                'Invalid json response: ' . $answer
            );
        }

        return $answer;
    }
}
