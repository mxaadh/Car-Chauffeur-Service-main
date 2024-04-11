<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $make = null;

    #[ORM\Column(length: 255)]
    private ?string $CarId = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column]
    private ?int $liceincePlate = null;

    #[ORM\Column(length: 255)]
    private ?string $Availibility = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMake(): ?string
    {
        return $this->make;
    }

    public function setMake(string $make): static
    {
        $this->make = $make;

        return $this;
    }

    public function getCarId(): ?string
    {
        return $this->CarId;
    }

    public function setCarId(string $CarId): static
    {
        $this->CarId = $CarId;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getLiceincePlate(): ?int
    {
        return $this->liceincePlate;
    }

    public function setLiceincePlate(int $liceincePlate): static
    {
        $this->liceincePlate = $liceincePlate;

        return $this;
    }

    public function getAvailibility(): ?string
    {
        return $this->Availibility;
    }

    public function setAvailibility(string $Availibility): static
    {
        $this->Availibility = $Availibility;

        return $this;
    }
}
