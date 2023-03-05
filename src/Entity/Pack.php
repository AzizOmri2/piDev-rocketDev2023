<?php

namespace App\Entity;

use App\Repository\PackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'pack', targetEntity: Abonnement::class)]
    private Collection $abonnements;


    public function __construct()
    {
        $this->abonnements = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Abonnement>
     */
    public function getAbonnements(): Collection
    {
        return $this->abonnements;
    }

    public function addAbonnement(Abonnement $abonnement): self
    {
        if (!$this->abonnements->contains($abonnement)) {
            $this->abonnements->add($abonnement);
            $abonnement->setPack($this);
        }

        return $this;
    }

    public function removeAbonnement(Abonnement $abonnement): self
    {
        if ($this->abonnements->removeElement($abonnement)) {
            // set the owning side to null (unless already changed)
            if ($abonnement->getPack() === $this) {
                $abonnement->setPack(null);
            }
        }

        return $this;
    }

}
