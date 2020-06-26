<?php

declare(strict_types=1);

namespace App\Service\Client;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SpaceXClient
{
    private const API_BASE_URL = 'https://api.spacexdata.com/v4';
    private SerializerInterface $serializer;
    private HttpClientInterface $client;

    public function __construct(SerializerInterface $serializer)
    {
        $this->client = HttpClient::create(['headers' => [
            'User-Agent' => 'Joppe De Cuyper (hello@joppe.dev)',
        ]]);

        $this->serializer = $serializer;
    }

    public function request(string $responseClass, string $action, string $method = 'GET', array $query = [], array $options = [])
    {
        //Todo: Catch exceptions

        $response = $this->client->request($method, sprintf('%s/%s', self::API_BASE_URL, $action), [
            'body' => [
                'query' => $query,
                'options' => $options,
            ],
        ]);

        $responseBody = $response->getContent();

        return $this->serializer->deserialize($responseBody, $responseClass, 'json');
    }
}
