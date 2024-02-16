<?php

namespace App\Entity;

use App\Repository\LogementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LogementRepository::class)]
class Logement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[Assert\NotBlank(message: "vous devez mettre le type!!!")]
    #[ORM\Column(length: 255)]
    private ?string $Localisation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre le type!!!")]
    private ?string $Equipement = null;

    #[Assert\NotBlank(message: "vous devez mettre le type!!!")]
    #[ORM\Column]
    private ?int $NoteMoyenne = null;
#[Assert\NotBlank(message: "vous devez mettre le type!!!")]
    #[ORM\Column]
    private ?int $Prix = null;

    #[ORM\Column]
    private ?bool $Etat = null;

    
    #[ORM\Column(length: 255)]
    private ?string $Image = null;
    #[Assert\NotBlank(message: "vous devez mettre le type!!!")]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeLog = null;

 

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalisation(): ?string
    {
        return $this->Localisation;
    }

    public function setLocalaisation(string $Localisation): static
    {
        $this->Localisation = $Localisation;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->Equipement;
    }

    public function setEquipement(string $Equipement): static
    {
        $this->Equipement = $Equipement;

        return $this;
    }

    public function getNoteMoyenne(): ?int
    {
        return $this->NoteMoyenne;
    }

    public function setNoteMoyenne(int $NoteMoyenne): static
    {
        $this->NoteMoyenne = $NoteMoyenne;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }
    

    public function isEtat(): ?bool
    {
        return $this->Etat;
    }

    public function setEtat(bool $Etat): static
    {
        $this->Etat = $Etat;

        return $this;
    }

   

    

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): static
    {
        $this->Image = $Image;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTypeLog(): ?string
    {
        return $this->TypeLog;
    }

    public function setTypeLog(string $TypeLog): static
    {
        $this->TypeLog = $TypeLog;

        return $this;
    }

    }

