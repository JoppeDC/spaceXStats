<?php

declare(strict_types=1);

namespace App\Repository;

use App\Service\Client\SpaceXClient;

class RepositoryFactory
{
    protected SpaceXClient $client;

    public function __construct(SpaceXClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return object|SpaceXRepositoryInterface
     */
    public function create(string $repo, string $resource, string $dataClass): object
    {
        return new $repo($this->client, $resource, $dataClass);
    }
}
