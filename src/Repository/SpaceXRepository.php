<?php

declare(strict_types=1);

namespace App\Repository;

use App\Service\Client\SpaceXClient;

class SpaceXRepository implements SpaceXRepositoryInterface
{
    private SpaceXClient $client;
    private string $resource;
    private string $dataClass;

    public function __construct(SpaceXClient $client, string $resource, string $dataClass)
    {
        $this->client = $client;
        $this->resource = $resource;
        $this->dataClass = $dataClass;
    }

    public function findAll(): ?array
    {
        return $this->client->request(sprintf('%s[]', $this->dataClass), $this->resource);
    }

    public function findOneById(string $id)
    {
        return $this->client->request($this->dataClass, sprintf('%s/%s', $this->resource, $id));
    }
}
