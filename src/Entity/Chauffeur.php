<?php

namespace App\Entity;

use App\Repository\ChauffeurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChauffeurRepository::class)]
class Chauffeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Chauffeurld = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $ContactInfo = null;

    #[ORM\Column(length: 255)]
    private ?string $Availability = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChauffeurld(): ?int
    {
        return $this->Chauffeurld;
    }

    public function setChauffeurld(int $Chauffeurld): static
    {
        $this->Chauffeurld = $Chauffeurld;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getContactInfo(): ?string
    {
        return $this->ContactInfo;
    }

    public function setContactInfo(string $ContactInfo): static
    {
        $this->ContactInfo = $ContactInfo;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->Availability;
    }

    public function setAvailability(string $Availability): static
    {
        $this->Availability = $Availability;

        return $this;
    }
}
