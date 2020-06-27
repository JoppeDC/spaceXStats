<?php

declare(strict_types=1);

namespace App\Repository;

use App\Client\Response\Company\Company;
use App\Service\Client\SpaceXClient;
use Symfony\Contracts\Cache\ItemInterface;

class CompanyInfoRepository extends SpaceXRepository
{
    public function __construct(SpaceXClient $client, string $resource, string $dataClass)
    {
        parent::__construct($client, $resource, $dataClass);
        $this->client = $client;
        $this->resource = $resource;
        $this->dataClass = $dataClass;
    }

    public function findAll(): ?array
    {
        throw new \Exception('This method is not allowed');
    }

    public function findOneById(string $id)
    {
        throw new \Exception('This method is not allowed');
    }

    public function findOne(): ?Company
    {
        return $this->adapter->get(sprintf('%s_%s', $this->resource, parent::FIND_ONE_BY_ID_CACHE_EXTENSION),
            function (ItemInterface $item) {
                $item->expiresAfter(60 * 60 * 24);

                return $this->client->request($this->dataClass, $this->resource);
            }
        );
    }
}
