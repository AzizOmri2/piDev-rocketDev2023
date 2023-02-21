<?php

namespace App\Entity;

use App\Repository\CompetitionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: CompetitionRepository::class)]
class Competition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column]
    #[Assert\NotBlank(message:"Il faut déclarer le nom de compétition à ajouter !!")]
    private ?string $nomCompetition = null;
   

    #[ORM\Column]
    #[Assert\Positive(message:"Prix invalide !!")]
    private ?float $fraisCompetition = null;


    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual(value: "today",message:"Date Invalide !!")]
    private ?\DateTimeInterface $dateCompetition = null;

    #[ORM\Column]
        
       #[ Assert\Range(
               min : 0,
               max : 50,
               notInRangeMessage : "Veuillez entrer un nombre entre 0 et 50.",
               invalidMessage : "Veuillez entrer un nombre valide."
          )]
         
    private ?int $nbrMaxInscrit = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"L'Etat ne peut être que 'disponible' ou 'non disponible' !!")]
    private ?string $etatCompetition = null;

    #[ORM\OneToMany(mappedBy: 'competition', targetEntity: Ticket::class)]
    private Collection $tickets;

    #[ORM\Column(nullable: true)]
    private ?int $nbrParticipant = null;

 

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCompetition(): ?string
    {
        return $this->nomCompetition;
    }

    public function setNomCompetition(string $nomCompetition): self
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

    public function __toString()
    {
        return $this->nomCompetition;
    }

    /**
     * @return Collection<int, Ticket>
     */
    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function addTicket(Ticket $ticket): self
    {
        if (!$this->tickets->contains($ticket)) {
            $this->tickets->add($ticket);
            $ticket->setCompetition($this);
        }

        return $this;
    }

    public function removeTicket(Ticket $ticket): self
    {
        if ($this->tickets->removeElement($ticket)) {
            // set the owning side to null (unless already changed)
            if ($ticket->getCompetition() === $this) {
                $ticket->setCompetition(null);
            }
        }

        return $this;
    }

    public function getNbrParticipant(): ?int
    {
        return $this->nbrParticipant;
    }

    public function setNbrParticipant(?int $nbrParticipant): self
    {
        $this->nbrParticipant = $nbrParticipant;

        return $this;
    }

 

}
