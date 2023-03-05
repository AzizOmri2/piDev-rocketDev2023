<?php

namespace App\Entity;

use App\Repository\PlanningRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanningRepository::class)]
class Planning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePlanning = null;

    #[ORM\ManyToMany(targetEntity: Cours::class, inversedBy: 'plannings')]
    private Collection $Cours;

    public function __construct()
    {
        $this->Cours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePlanning(): ?\DateTimeInterface
    {
        return $this->datePlanning;
    }

    public function setDatePlanning(\DateTimeInterface $datePlanning): self
    {
        $this->datePlanning = $datePlanning;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->Cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->Cours->contains($cour)) {
            $this->Cours->add($cour);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        $this->Cours->removeElement($cour);

        return $this;
    }

    
}
