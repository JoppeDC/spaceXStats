<?php

declare(strict_types=1);

namespace App\Client\Response\Company;

use App\Client\Response\SpaceXResponseInterface;

class Company implements SpaceXResponseInterface
{
    private array $headquarters = [];
    private string $name = '';
    private string $founder = '';
    private string $ceo = '';
    private string $cto = '';
    private string $coo = '';
    private string $ctoPropulsion = '';
    private string $summary = '';
    private string $id = '';
    private array $links = [];
    private int $founded = 0;
    private int $employees = 0;
    private int $vehicles = 0;
    private int $launchSites = 0;
    private int $testSites = 0;
    private int $valuation = 0;

    public function getHeadquarters(): array
    {
        return $this->headquarters;
    }

    public function setHeadquarters(array $headquarters): void
    {
        $this->headquarters = $headquarters;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFounder(): string
    {
        return $this->founder;
    }

    public function setFounder(string $founder): void
    {
        $this->founder = $founder;
    }

    public function getCeo(): string
    {
        return $this->ceo;
    }

    public function setCeo(string $ceo): void
    {
        $this->ceo = $ceo;
    }

    public function getCto(): string
    {
        return $this->cto;
    }

    public function setCto(string $cto): void
    {
        $this->cto = $cto;
    }

    public function getCoo(): string
    {
        return $this->coo;
    }

    public function setCoo(string $coo): void
    {
        $this->coo = $coo;
    }

    public function getCtoPropulsion(): string
    {
        return $this->ctoPropulsion;
    }

    public function setCtoPropulsion(string $ctoPropulsion): void
    {
        $this->ctoPropulsion = $ctoPropulsion;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $links): void
    {
        $this->links = $links;
    }

    public function getFounded(): int
    {
        return $this->founded;
    }

    public function setFounded(int $founded): void
    {
        $this->founded = $founded;
    }

    public function getEmployees(): int
    {
        return $this->employees;
    }

    public function setEmployees(int $employees): void
    {
        $this->employees = $employees;
    }

    public function getVehicles(): int
    {
        return $this->vehicles;
    }

    public function setVehicles(int $vehicles): void
    {
        $this->vehicles = $vehicles;
    }

    public function getLaunchSites(): int
    {
        return $this->launchSites;
    }

    public function setLaunchSites(int $launchSites): void
    {
        $this->launchSites = $launchSites;
    }

    public function getTestSites(): int
    {
        return $this->testSites;
    }

    public function setTestSites(int $testSites): void
    {
        $this->testSites = $testSites;
    }

    public function getValuation(): int
    {
        return $this->valuation;
    }

    public function setValuation(int $valuation): void
    {
        $this->valuation = $valuation;
    }
}
