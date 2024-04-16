<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $bookingId = null;

    #[ORM\Column]
    private ?int $customerId = null;

    #[ORM\Column(length: 255)]
    private ?string $specialBooking = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dropOfCustomer = null;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    private ?\DateTimeInterface $pckUpCustomer = null;

    #[ORM\Column]
    private ?bool $isLuxury = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookingId(): ?int
    {
        return $this->bookingId;
    }

    public function setBookingId(int $bookingId): static
    {
        $this->bookingId = $bookingId;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(int $customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getSpecialBooking(): ?string
    {
        return $this->specialBooking;
    }

    public function setSpecialBooking(string $specialBooking): static
    {
        $this->specialBooking = $specialBooking;

        return $this;
    }

    public function getDropOfCustomer(): ?\DateTimeInterface
    {
        return $this->dropOfCustomer;
    }

    public function setDropOfCustomer(\DateTimeInterface $dropOfCustomer): static
    {
        $this->dropOfCustomer = $dropOfCustomer;

        return $this;
    }

    public function getPckUpCustomer(): ?\DateTimeInterface
    {
        return $this->pckUpCustomer;
    }

    public function setPckUpCustomer(\DateTimeInterface $pckUpCustomer): static
    {
        $this->pckUpCustomer = $pckUpCustomer;

        return $this;
    }

    public function isLuxury(): ?bool
    {
        return $this->isLuxury;
    }

    public function setLuxury(bool $isLuxury): static
    {
        $this->isLuxury = $isLuxury;

        return $this;
    }
}
