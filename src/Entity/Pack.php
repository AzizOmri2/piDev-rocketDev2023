<?php

namespace App\Entity;

use App\Repository\PackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackRepository::class)]
class Pack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typePack = null;

    #[ORM\Column(nullable: true)]
    private ?float $offrePack = null;

    #[ORM\Column]
    private ?float $montantPack = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypePack(): ?string
    {
        return $this->typePack;
    }

    public function setTypePack(string $typePack): self
    {
        $this->typePack = $typePack;

        return $this;
    }

    public function getOffrePack(): ?float
    {
        return $this->offrePack;
    }

    public function setOffrePack(?float $offrePack): self
    {
        $this->offrePack = $offrePack;

        return $this;
    }

    public function getMontantPack(): ?float
    {
        return $this->montantPack;
    }

    public function setMontantPack(float $montantPack): self
    {
        $this->montantPack = $montantPack;

        return $this;
    }
}
