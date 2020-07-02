<?php

declare(strict_types=1);

namespace App\Client\Response\LandingPad;

use App\Client\Response\SpaceXResponseInterface;

class LandingPad implements SpaceXResponseInterface
{
    private const STATUS_ACTIVE = 'active';

    private string $name = '';
    private string $fullName = '';
    private string $status = '';
    private string $type = '';
    private string $locality = '';
    private string $region = '';
    private string $landingAttempts = '';
    private string $landingSuccesses = '';
    private string $wikipedia = '';
    private string $details = '';
    private string $id = '';
    private float $latitude = 0.0;
    private float $longitude = 0.0;
    private array $launches = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getLocality(): string
    {
        return $this->locality;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getLandingAttempts(): string
    {
        return $this->landingAttempts;
    }

    public function getLandingSuccesses(): string
    {
        return $this->landingSuccesses;
    }

    public function getWikipedia(): string
    {
        return $this->wikipedia;
    }

    public function getDetails(): string
    {
        return $this->details;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLaunches(): array
    {
        return $this->launches;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function setLocality(string $locality): void
    {
        $this->locality = $locality;
    }

    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    public function setLandingAttempts(string $landingAttempts): void
    {
        $this->landingAttempts = $landingAttempts;
    }

    public function setLandingSuccesses(string $landingSuccesses): void
    {
        $this->landingSuccesses = $landingSuccesses;
    }

    public function setWikipedia(string $wikipedia): void
    {
        $this->wikipedia = $wikipedia;
    }

    public function setDetails(string $details): void
    {
        $this->details = $details;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function setLaunches(array $launches): void
    {
        $this->launches = $launches;
    }

    public function isActive(): bool
    {
        return self::STATUS_ACTIVE === $this->status;
    }
}
