<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;


#[ORM\Entity(repositoryClass: RestaurantRepository::class)]

class Restaurant
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $numdetel = null;

    #[ORM\Column(type: "integer")]
private ?int $nmbetoiles = null;


    #[ORM\Column(length: 255)]
    private ?string $ImageRestaurant = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $heureOuverture = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $heureFermeture = null;

    #[ORM\Column(type: 'boolean')]
    private bool $favoris = false; // Ajout de la propriété favoris

    #[ORM\ManyToMany(targetEntity: Plat::class, mappedBy: "restaurants")]
    private $plats;

    public function __construct()
    {
        $this->plats = new ArrayCollection(); // Initialisez la propriété $plats
    }


    /*
      @return Collection|Plat[]
     */
    public function getPlats(): Collection
    {
        return $this->plats;
    }

    public function addPlat(Plat $plat): self
    {
        if (!$this->plats->contains($plat)) {
            $this->plats[] = $plat;
            $plat->addRestaurant($this); // Assurez-vous de mettre à jour l'autre côté de la relation
        }

        return $this;
    }

    public function removePlat(Plat $plat): self
    {
        if ($this->plats->removeElement($plat)) {
            $plat->removeRestaurant($this); // Assurez-vous de mettre à jour l'autre côté de la relation
        }

        return $this;
    }

    

   
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumdetel(): ?string
    {
        return $this->numdetel;
    }

    public function setNumdetel(?string $numdetel): static
    {
        $this->numdetel = $numdetel;

        return $this;
    }

    public function getNmbetoiles(): ?int
{
    return $this->nmbetoiles;
}

public function setNmbetoiles(?int $nmbetoiles): static
{
    $this->nmbetoiles = $nmbetoiles;

    return $this;
}


    public function getImageRestaurant(): ?string
    {
        return $this->ImageRestaurant;
    }

    public function setImageRestaurant(?string $ImageRestaurant): self
    {
        $this->ImageRestaurant = $ImageRestaurant;

        return $this;
    }

    public function getHeureOuverture(): ?string
{
    return $this->heureOuverture;
}

public function setHeureOuverture(?string $heureOuverture): self
{
    $this->heureOuverture = $heureOuverture;
    return $this;
}

public function getHeureFermeture(): ?string
{
    return $this->heureFermeture;
}

public function setHeureFermeture(?string $heureFermeture): self
{
    $this->heureFermeture = $heureFermeture;
    return $this;
}

public function isFavoris(): ?bool
    {
        return $this->favoris;
    }

    public function setFavoris(bool $favoris): self
    {
        $this->favoris = $favoris;

        return $this;
    }


   

    
   

}
