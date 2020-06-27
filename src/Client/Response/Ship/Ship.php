<?php

declare(strict_types=1);

namespace App\Client\Response\Ship;

class Ship
{
    private ?string $legacyId;
    private ?string $type;
    private ?string $homePort;
    private ?string $link;
    private ?string $image;
    private ?string $name;
    private ?string $id;
    private ?int $imo;
    private ?int $mmsi;
    private ?int $abs;
    private ?int $class;
    private ?int $massKg;
    private ?int $massLbs;
    private ?int $yearBuilt;
    private ?array $roles;
    private ?array $launches;
    private ?bool $active;

    public function getLegacyId(): ?string
    {
        return $this->legacyId;
    }

    public function setLegacyId(?string $legacyId): void
    {
        $this->legacyId = $legacyId;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getHomePort(): ?string
    {
        return $this->homePort;
    }

    public function setHomePort(?string $homePort): void
    {
        $this->homePort = $homePort;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): void
    {
        $this->link = $link;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getImo(): ?int
    {
        return $this->imo;
    }

    public function setImo(?int $imo): void
    {
        $this->imo = $imo;
    }

    public function getMmsi(): ?int
    {
        return $this->mmsi;
    }

    public function setMmsi(?int $mmsi): void
    {
        $this->mmsi = $mmsi;
    }

    public function getAbs(): ?int
    {
        return $this->abs;
    }

    public function setAbs(?int $abs): void
    {
        $this->abs = $abs;
    }

    public function getClass(): ?int
    {
        return $this->class;
    }

    public function setClass(?int $class): void
    {
        $this->class = $class;
    }

    public function getMassKg(): ?int
    {
        return $this->massKg;
    }

    public function setMassKg(?int $massKg): void
    {
        $this->massKg = $massKg;
    }

    public function getMassLbs(): ?int
    {
        return $this->massLbs;
    }

    public function setMassLbs(?int $massLbs): void
    {
        $this->massLbs = $massLbs;
    }

    public function getYearBuilt(): ?int
    {
        return $this->yearBuilt;
    }

    public function setYearBuilt(?int $yearBuilt): void
    {
        $this->yearBuilt = $yearBuilt;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    public function getLaunches(): ?array
    {
        return $this->launches;
    }

    public function setLaunches(?array $launches): void
    {
        $this->launches = $launches;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }
}
