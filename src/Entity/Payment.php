<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $bookingId = null;

    #[ORM\Column]
    private ?int $paymentId = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 0)]
    private ?string $Amount = null;

    #[ORM\Column(length: 255)]
    private ?string $PaymentMethod = null;

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

    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }

    public function setPaymentId(int $paymentId): static
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->Amount;
    }

    public function setAmount(string $Amount): static
    {
        $this->Amount = $Amount;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }

    public function setPaymentMethod(string $PaymentMethod): static
    {
        $this->PaymentMethod = $PaymentMethod;

        return $this;
    }
}
