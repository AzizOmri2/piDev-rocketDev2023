<?php

namespace App\Entity;

use App\Repository\ChargeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChargeRepository::class)]
class Charge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantiteCharge = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateArrivageCharge = null;

    #[ORM\ManyToOne(inversedBy: 'charges')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fournisseur $fournisseur = null;

    #[ORM\ManyToOne(inversedBy: 'charges')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Materiel $materiel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteCharge(): ?int
    {
        return $this->quantiteCharge;
    }

    public function setQuantiteCharge(int $quantiteCharge): self
    {
        $this->quantiteCharge = $quantiteCharge;

        return $this;
    }

    public function getDateArrivageCharge(): ?\DateTimeInterface
    {
        return $this->dateArrivageCharge;
    }

    public function setDateArrivageCharge(\DateTimeInterface $dateArrivageCharge): self
    {
        $this->dateArrivageCharge = $dateArrivageCharge;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getMateriel(): ?Materiel
    {
        return $this->materiel;
    }

    public function setMateriel(?Materiel $materiel): self
    {
        $this->materiel = $materiel;

        return $this;
    }
}
