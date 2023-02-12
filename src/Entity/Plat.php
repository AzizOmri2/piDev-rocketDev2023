<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatRepository::class)]
class Plat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomPlat = null;

    #[ORM\Column]
    private ?float $prixPlat = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionPlat = null;

    #[ORM\Column(length: 255)]
    private ?string $imagePlat = null;

    #[ORM\Column]
    private ?int $caloriesPlat = null;

    #[ORM\Column(length: 255)]
    private ?string $etatPlat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPlat(): ?string
    {
        return $this->nomPlat;
    }

    public function setNomPlat(string $nomPlat): self
    {
        $this->nomPlat = $nomPlat;

        return $this;
    }

    public function getPrixPlat(): ?float
    {
        return $this->prixPlat;
    }

    public function setPrixPlat(float $prixPlat): self
    {
        $this->prixPlat = $prixPlat;

        return $this;
    }

    public function getDescriptionPlat(): ?string
    {
        return $this->descriptionPlat;
    }

    public function setDescriptionPlat(string $descriptionPlat): self
    {
        $this->descriptionPlat = $descriptionPlat;

        return $this;
    }

    public function getImagePlat(): ?string
    {
        return $this->imagePlat;
    }

    public function setImagePlat(string $imagePlat): self
    {
        $this->imagePlat = $imagePlat;

        return $this;
    }

    public function getCaloriesPlat(): ?int
    {
        return $this->caloriesPlat;
    }

    public function setCaloriesPlat(int $caloriesPlat): self
    {
        $this->caloriesPlat = $caloriesPlat;

        return $this;
    }

    public function getEtatPlat(): ?string
    {
        return $this->etatPlat;
    }

    public function setEtatPlat(string $etatPlat): self
    {
        $this->etatPlat = $etatPlat;

        return $this;
    }
}
