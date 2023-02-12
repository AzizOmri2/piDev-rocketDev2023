<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dureeAbonnement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateAchat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255)]
    private ?string $etatAbonnement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDureeAbonnement(): ?string
    {
        return $this->dureeAbonnement;
    }

    public function setDureeAbonnement(string $dureeAbonnement): self
    {
        $this->dureeAbonnement = $dureeAbonnement;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getEtatAbonnement(): ?string
    {
        return $this->etatAbonnement;
    }

    public function setEtatAbonnement(string $etatAbonnement): self
    {
        $this->etatAbonnement = $etatAbonnement;

        return $this;
    }
}
