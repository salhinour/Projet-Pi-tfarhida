<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre le type !!!")]
    private ?string $type_de_reclamation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez insérer la description !!!")]
    private ?string $description_reclamation = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "vous devez entrer la date !!!")]
    private ?\DateTimeInterface $date = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Reponse $Reponse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeDeReclamation(): ?string
    {
        return $this->type_de_reclamation;
    }

    public function setTypeDeReclamation(string $type_de_reclamation): static
    {
        $this->type_de_reclamation = $type_de_reclamation;

        return $this;
    }

    public function getDescriptionReclamation(): ?string
    {
        return $this->description_reclamation;
    }

    public function setDescriptionReclamation(string $description_reclamation): static
    {
        $this->description_reclamation = $description_reclamation;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getReponse(): ?Reponse
    {
        return $this->Reponse;
    }

    public function setReponse(?Reponse $Reponse): static
    {
        $this->Reponse = $Reponse;

        return $this;
    }
}