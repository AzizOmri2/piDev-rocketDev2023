<?php

namespace App\Entity;

use App\Repository\CompetitionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetitionRepository::class)]
class Competition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nomCompetition = null;

    #[ORM\Column]
    private ?float $fraisCompetition = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateCompetition = null;

    #[ORM\Column]
    private ?int $nbrMaxInscrit = null;

    #[ORM\Column(length: 255)]
    private ?string $etatCompetition = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCompetition(): ?int
    {
        return $this->nomCompetition;
    }

    public function setNomCompetition(int $nomCompetition): self
    {
        $this->nomCompetition = $nomCompetition;

        return $this;
    }

    public function getFraisCompetition(): ?float
    {
        return $this->fraisCompetition;
    }

    public function setFraisCompetition(float $fraisCompetition): self
    {
        $this->fraisCompetition = $fraisCompetition;

        return $this;
    }

    public function getDateCompetition(): ?\DateTimeInterface
    {
        return $this->dateCompetition;
    }

    public function setDateCompetition(\DateTimeInterface $dateCompetition): self
    {
        $this->dateCompetition = $dateCompetition;

        return $this;
    }

    public function getNbrMaxInscrit(): ?int
    {
        return $this->nbrMaxInscrit;
    }

    public function setNbrMaxInscrit(int $nbrMaxInscrit): self
    {
        $this->nbrMaxInscrit = $nbrMaxInscrit;

        return $this;
    }

    public function getEtatCompetition(): ?string
    {
        return $this->etatCompetition;
    }

    public function setEtatCompetition(string $etatCompetition): self
    {
        $this->etatCompetition = $etatCompetition;

        return $this;
    }
}
