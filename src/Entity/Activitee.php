<?php

namespace App\Entity;

use App\Repository\ActiviteeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ActiviteeRepository::class)]
class Activitee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre le nom!!!")]

    private ?string $nom = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "vous devez mettre le prix!!!")]

    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre la localisation!!!")]

    private ?string $localisation = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "vous devez mettre le nombre!!!")]

    private ?int $nbP = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "vous devez mettre l'etat!!!")]

    private ?bool $etat = null;

    #[ORM\ManyToOne(inversedBy: 'activitee')]
    private ?Categorie $categorie = null;

   

    

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getNbP(): ?int
    {
        return $this->nbP;
    }

    public function setNbP(int $nbP): static
    {
        $this->nbP = $nbP;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }
    
}
