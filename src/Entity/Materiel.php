<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaterielRepository::class)]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomMateriel = null;

    #[ORM\Column(length: 255)]
    private ?string $referenceMateriel = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateMaintenanceMateriel = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteMateriel = null;

    #[ORM\OneToMany(mappedBy: 'materiel', targetEntity: Charge::class)]
    private Collection $charges;

    public function __construct()
    {
        $this->charges = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMateriel(): ?string
    {
        return $this->nomMateriel;
    }

    public function setNomMateriel(string $nomMateriel): self
    {
        $this->nomMateriel = $nomMateriel;

        return $this;
    }

    public function getReferenceMateriel(): ?string
    {
        return $this->referenceMateriel;
    }

    public function setReferenceMateriel(string $referenceMateriel): self
    {
        $this->referenceMateriel = $referenceMateriel;

        return $this;
    }

    public function getDateMaintenanceMateriel(): ?\DateTimeInterface
    {
        return $this->dateMaintenanceMateriel;
    }

    public function setDateMaintenanceMateriel(\DateTimeInterface $dateMaintenanceMateriel): self
    {
        $this->dateMaintenanceMateriel = $dateMaintenanceMateriel;

        return $this;
    }

    public function getQuantiteMateriel(): ?int
    {
        return $this->quantiteMateriel;
    }

    public function setQuantiteMateriel(?int $quantiteMateriel): self
    {
        $this->quantiteMateriel = $quantiteMateriel;

        return $this;
    }

    /**
     * @return Collection<int, Charge>
     */
    public function getCharges(): Collection
    {
        return $this->charges;
    }

    public function addCharge(Charge $charge): self
    {
        if (!$this->charges->contains($charge)) {
            $this->charges->add($charge);
            $charge->setMateriel($this);
        }

        return $this;
    }

    public function removeCharge(Charge $charge): self
    {
        if ($this->charges->removeElement($charge)) {
            // set the owning side to null (unless already changed)
            if ($charge->getMateriel() === $this) {
                $charge->setMateriel(null);
            }
        }

        return $this;
    }

}
