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
    
    #[Assert\NotBlank(message: "vous devez mettre le Localisation!!!")]
    #[ORM\Column(length: 255)]
    private ?string $Localisation = '';
    /**
     * @Assert\Regex(
     *     pattern="/^\d{8}$/",
     *     message="Le numéro doit être composé de 8 chiffres."
     * )
     */
    #[Assert\Regex(
        pattern : "/^\d{8}$/",
        message: "Le numéro doit être composé de 8 chiffres."
    )]
    #[Assert\NotBlank(message: "Le numéro doit être composé de 8 chiffres!!!")]
    #[ORM\Column]
    private ?int $num = null;

    #[Assert\NotBlank(message: "vous devez mettre le Note!!!")]
    #[Assert\LessThanOrEqual(value: 5, message: "La note moyenne ne peut pas dépasser 5.")]
    #[ORM\Column]
    private ?int $NoteMoyenne = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "vous devez mettre le prix!!!")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "Le prix doit être supérieur ou égal à zéro")]
    private ?int $Prix = null;

    #[ORM\Column]
    private ?string $Etat = 'En cours';

    
    #[ORM\Column(length: 255)]
    private ?string $Image = '';

    #[Assert\NotBlank(message: "vous devez mettre le Nom!!!")]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[Assert\NotBlank(message: "vous devez mettre le Type de votre logement!!!")]
    #[ORM\Column(length: 255)]
    private ?string $TypeLog = null;
    
    #[ORM\OneToOne(targetEntity: Equipement::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: "equipement_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private ?Equipement $equipement = null;

    #[ORM\ManyToOne(inversedBy: 'logements')]
    private ?User $user = null;

   

 

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalisation(): ?string
    {
        return $this->Localisation;
    }

   
    public function setLocalisation(?string $Localisation): static
{
    $this->Localisation = $Localisation ?? '';

    return $this;
}



    public function getNoteMoyenne(): ?int
    {
        return $this->NoteMoyenne;
    }

    public function setNoteMoyenne(?int $NoteMoyenne): static
    {
        $this->NoteMoyenne = $NoteMoyenne;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(?int $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }
    

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(?string $Etat): static
    {
        $this->Etat = $Etat;

        return $this;
    }

   

    

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): static
    {
        $this->Image = $Image;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTypeLog(): ?string
    {
        return $this->TypeLog;
    }

    public function setTypeLog(?string $TypeLog): static
    {
        $this->TypeLog = $TypeLog;

        return $this;
    }
    // In your Logement entity class (App\Entity\Logement)

public function __toString()
{
    return $this->getNom(); // Replace getName() with the actual method that returns the string representation of Logement.
}
public function getNum(): ?int
{
    return $this->num;
}

public function setNum(int $num): static
{
    $this->num = $num;

    return $this;
}
public function getEquipement(): ?equipement
{
    return $this->equipement;
}

public function setEquipement(?equipement $equipement): static
{
    $this->equipement = $equipement;

    return $this;
}

public function getUser(): ?User
{
    return $this->user;
}

public function setUser(?User $user): static
{
    $this->user = $user;

    return $this;
}

}
