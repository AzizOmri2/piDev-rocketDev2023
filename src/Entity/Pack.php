<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert; 
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
    #[Assert\NotBlank(  message: "Le champ est vide !",     )]
    #[Assert\Regex(pattern: '/[a-zA-Z]/',
    message:'!!')]
    private ?string $typePack = null;

    #[ORM\Column]
    #[Assert\NotBlank( message: "Le champ est vide !",         )]
    #[Assert\Positve( message: "Le montant doit etre positive!",   )]
    private ?float $montantPack = null;

    #[ORM\OneToMany(mappedBy: 'pack', targetEntity: Abonnement::class)]
    private Collection $abonnements;

    #[ORM\Column]
    #[Assert\NotBlank(   message: "Le champ est vide !"   )]
    #[Assert\Positve(  message: "Le montant doit etre positive!" )]
    private ?int $DureePack = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(   message: "Le champ est vide !"    )]
    private ?string $descriptionPack = null;

    #[ORM\Column]
    private ?int $placesPack = 0;

    #[ORM\Column]
    #[Assert\NotBlank(   message: "Le champ est vide !"   )]
    #[Assert\Positve(  message: "La disponibilité doit etre positive!" )]
    private ?int $disponibilitePack = null;


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
    public function __toString(){
        return(String) $this->getTypePack();
    }

    public function getDureePack(): ?int
    {
        return $this->DureePack;
    }

    public function setDureePack(int $DureePack): self
    {
        $this->DureePack = $DureePack;

        return $this;
    }

   


    public function getDescriptionPack(): ?string
    {
        return $this->descriptionPack;
    }

    public function setDescriptionPack(string $descriptionPack): self
    {
        $this->descriptionPack = $descriptionPack;

        return $this;
    }

    public function getPlacesPack(): ?int
    {
        return $this->placesPack;
    }

    public function setPlacesPack(?int $placesPack): self
    {
        $this->placesPack = $placesPack;

        return $this;
    }

    public function getDisponibilitePack(): ?int
    {
        return $this->disponibilitePack;
    }

    public function setDisponibilitePack(int $disponibilitePack): self
    {
        $this->disponibilitePack = $disponibilitePack;

        return $this;
    }
}
