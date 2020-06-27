<?php

declare(strict_types=1);

namespace App\Repository;

use App\Service\Client\SpaceXClient;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;

class SpaceXRepository implements SpaceXRepositoryInterface
{
    protected const FIND_ALL_CACHE_EXTENSION = 'find_all';
    protected const FIND_ONE_BY_ID_CACHE_EXTENSION = 'find_one_by_id';

    protected SpaceXClient $client;
    protected string $resource;
    protected string $dataClass;
    protected FilesystemAdapter $adapter;

    public function __construct(SpaceXClient $client, string $resource, string $dataClass)
    {
        $this->client = $client;
        $this->resource = $resource;
        $this->dataClass = $dataClass;
        $this->adapter = new FilesystemAdapter();
    }

    public function findAll(): ?array
    {
        return $this->adapter->get(sprintf('%s_%s', $this->resource, self::FIND_ALL_CACHE_EXTENSION),
            function (ItemInterface $item) {
                $item->expiresAfter(60 * 60 * 24);

                return $this->client->request(sprintf('%s[]', $this->dataClass), $this->resource);
            }
        );
    }

    public function findOneById(string $id)
    {
        return $this->adapter->get(sprintf('%s_%s_%s', $this->resource, self::FIND_ONE_BY_ID_CACHE_EXTENSION, $id),
            function (ItemInterface $item) use ($id) {
                $item->expiresAfter(60 * 60 * 24);

                return $this->client->request($this->dataClass, sprintf('%s/%s', $this->resource, $id));
            }
        );
    }
}
