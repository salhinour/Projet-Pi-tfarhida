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
    #[Assert\Length(
        min: 7,
        minMessage: "Le champ doit contenir au moins {{ limit }} caractères.",
        
    )]
    #[Assert\Regex( 
        pattern: "/^[a-zA-Z]+$/",
        message: "Seules les lettres sont autorisées dans ce champ."
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez insérer la description !!!")]
    private ?string $description_reclamation = null;

    #[ORM\Column(type: 'boolean')]
    private ?bool $etat = false;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Reponse $Reponse = null;

    #[ORM\Column(length: 255)]
    private ?string $image = '';

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescriptionReclamation(): ?string
    {
        return $this->description_reclamation;
    }

    public function setDescriptionReclamation(?string $description_reclamation): static
    {
        $this->description_reclamation = $description_reclamation;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): static
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }
   
}