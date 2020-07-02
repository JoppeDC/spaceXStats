<?php

declare(strict_types=1);

namespace App\Client\Response\Rocket;

use App\Client\Response\SpaceXResponseInterface;

class Rocket implements SpaceXResponseInterface
{
    private ?string $name = null;
    private ?string $type = null;
    private ?string $firstFlight = null;
    private ?string $country = null;
    private ?string $company = null;
    private ?string $wikipedia = null;
    private ?string $description = null;
    private ?string $id = null;

    private array $diameter = [];
    private array $mass = [];
    private array $firstStage = [];
    private array $secondStage = [];
    private array $engines = [];
    private array $landingLegs = [];
    private array $payloadWeights = [];
    private array $flickrImages = [];

    private bool $active = false;

    private int $stages = 0;
    private int $boosters = 0;
    private int $costPerLaunch = 0;
    private int $successRatePct = 0;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getFirstFlight(): ?string
    {
        return $this->firstFlight;
    }

    public function setFirstFlight(?string $firstFlight): void
    {
        $this->firstFlight = $firstFlight;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    public function getWikipedia(): ?string
    {
        return $this->wikipedia;
    }

    public function setWikipedia(?string $wikipedia): void
    {
        $this->wikipedia = $wikipedia;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getDiameter(): array
    {
        return $this->diameter;
    }

    public function setDiameter(array $diameter): void
    {
        $this->diameter = $diameter;
    }

    public function getMass(): array
    {
        return $this->mass;
    }

    public function setMass(array $mass): void
    {
        $this->mass = $mass;
    }

    public function getFirstStage(): array
    {
        return $this->firstStage;
    }

    public function setFirstStage(array $firstStage): void
    {
        $this->firstStage = $firstStage;
    }

    public function getSecondStage(): array
    {
        return $this->secondStage;
    }

    public function setSecondStage(array $secondStage): void
    {
        $this->secondStage = $secondStage;
    }

    public function getEngines(): array
    {
        return $this->engines;
    }

    public function setEngines(array $engines): void
    {
        $this->engines = $engines;
    }

    public function getLandingLegs(): array
    {
        return $this->landingLegs;
    }

    public function setLandingLegs(array $landingLegs): void
    {
        $this->landingLegs = $landingLegs;
    }

    public function getPayloadWeights(): array
    {
        return $this->payloadWeights;
    }

    public function setPayloadWeights(array $payloadWeights): void
    {
        $this->payloadWeights = $payloadWeights;
    }

    public function getFlickrImages(): array
    {
        return $this->flickrImages;
    }

    public function setFlickrImages(array $flickrImages): void
    {
        $this->flickrImages = $flickrImages;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getStages(): int
    {
        return $this->stages;
    }

    public function setStages(int $stages): void
    {
        $this->stages = $stages;
    }

    public function getBoosters(): int
    {
        return $this->boosters;
    }

    public function setBoosters(int $boosters): void
    {
        $this->boosters = $boosters;
    }

    public function getCostPerLaunch(): int
    {
        return $this->costPerLaunch;
    }

    public function setCostPerLaunch(int $costPerLaunch): void
    {
        $this->costPerLaunch = $costPerLaunch;
    }

    public function getSuccessRatePct(): int
    {
        return $this->successRatePct;
    }

    public function setSuccessRatePct(int $successRatePct): void
    {
        $this->successRatePct = $successRatePct;
    }
}
