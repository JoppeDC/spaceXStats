<?php

declare(strict_types=1);

namespace App\Client\Response\Crew;

class Crew
{
    private const STATUS_ACTIVE = 'active';

    private string $name = '';
    private string $agency = '';
    private string $image = '';
    private string $wikipedia = '';
    private string $status = '';
    private string $id = '';
    private array $launches = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAgency(): string
    {
        return $this->agency;
    }

    public function setAgency(string $agency): void
    {
        $this->agency = $agency;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getWikipedia(): string
    {
        return $this->wikipedia;
    }

    public function setWikipedia(string $wikipedia): void
    {
        $this->wikipedia = $wikipedia;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getLaunches(): array
    {
        return $this->launches;
    }

    public function setLaunches(array $launches): void
    {
        $this->launches = $launches;
    }

    public function isActive()
    {
        return self::STATUS_ACTIVE === $this->status;
    }
}
