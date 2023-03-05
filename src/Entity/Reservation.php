<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
  //  #[Groups("reservation")]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual("today", message: "Veuillez saisir une date supérieure ou égal à la date d'aujourd'hui ")]
  //  #[Groups("reservation")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ ne doit pas être vide")]
 //   #[Groups("reservation")]
    private ?string $userid = null;

   #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Plat $idplat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getIdplat(): ?Plat
    {
        return $this->idplat;
    }

    public function setIdplat(?Plat $idplat): self
    {
        $this->idplat = $idplat;

        return $this;
    }


}
