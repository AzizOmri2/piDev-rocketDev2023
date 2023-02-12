<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionTicket = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionTicket(): ?string
    {
        return $this->descriptionTicket;
    }

    public function setDescriptionTicket(string $descriptionTicket): self
    {
        $this->descriptionTicket = $descriptionTicket;

        return $this;
    }
}
