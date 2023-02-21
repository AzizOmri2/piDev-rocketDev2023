<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codePromotion = null;

    #[ORM\Column]
    private ?float $reductionPromotion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DateExpiration = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePromotion(): ?string
    {
        return $this->codePromotion;
    }

    public function setCodePromotion(string $codePromotion): self
    {
        $this->codePromotion = $codePromotion;

        return $this;
    }

    public function getReductionPromotion(): ?float
    {
        return $this->reductionPromotion;
    }

    public function setReductionPromotion(float $reductionPromotion): self
    {
        $this->reductionPromotion = $reductionPromotion;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->DateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $DateExpiration): self
    {
        $this->DateExpiration = $DateExpiration;

        return $this;
    }
}
