<?php

namespace App\Entity;

use App\Repository\SponsorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['sponsors'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Ce champ ne doit pas être vide")]
    #[Assert\Length(min: 3, max: 10, minMessage: "Ce champ doit contenir au moins 3 caractères", maxMessage: "Ce champ doit contenir au plus 10 caractères")]
    #[Groups(['sponsors'])]
    private ?string $nomSponsor = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Ce champ ne doit pas être vide")]
    #[Assert\Positive(message: "Ce champ doit être positif")]
    #[Groups(['sponsors'])]
    private ?float $donnation = null;


    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\LessThanOrEqual(value: "today", message: "Date doit etre inferieur ou egale la date d'aujourdhui !!")]
    #[Groups(['sponsors'])]
    private ?\DateTimeInterface $dateDebut= null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\GreaterThanOrEqual(value: "today", message: "Date doit etre superieur ou egale la date de d'aujourdhui !!")]
    #[Groups(['sponsors'])]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\Column(length: 255)]
    #[Groups(['sponsors'])]
    private ?string $image = null;

    #[ORM\ManyToMany(targetEntity: Competition::class, inversedBy: 'sponsors')]
    private Collection $compitions;

    public function __construct()
    {
        $this->compitions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSponsor(): ?string
    {
        return $this->nomSponsor;
    }

    public function setNomSponsor(string $nomSponsor): self
    {
        $this->nomSponsor = $nomSponsor;

        return $this;
    }

    public function getDonnation(): ?float
    {
        return $this->donnation;
    }

    public function setDonnation(float $donnation): self
    {
        $this->donnation = $donnation;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDatedebut(?\DateTimeInterface $datedebut): self
    {
        $this->dateDebut = $datedebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(?\DateTimeInterface $DateFin): self
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Competition>
     */
    public function getCompitions(): Collection
    {
        return $this->compitions;
    }

    public function addCompition(Competition $compition): self
    {
        if (!$this->compitions->contains($compition)) {
            $this->compitions->add($compition);
        }

        return $this;
    }

    public function removeCompition(Competition $compition): self
    {
        $this->compitions->removeElement($compition);

        return $this;
    }
}
