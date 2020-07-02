<?php

declare(strict_types=1);

namespace App\Client\Response\Ship;

use App\Client\Response\SpaceXResponseInterface;

class Ship implements SpaceXResponseInterface
{
    private ?string $legacyId = null;
    private ?string $type = null;
    private ?string $homePort = null;
    private ?string $link = null;
    private ?string $image = null;
    private ?string $name = null;
    private ?string $id = null;
    private ?int $imo = null;
    private ?int $mmsi = null;
    private ?int $abs = null;
    private ?int $class = null;
    private ?int $massKg = null;
    private ?int $massLbs = null;
    private ?int $yearBuilt = null;
    private ?array $roles = null;
    private ?array $launches = null;
    private ?bool $active = null;

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
