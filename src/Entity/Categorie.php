<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre la description!!!")]

    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre le type!!!")]

    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÖØ-öø-ÿ\s]+$/',
        message: "Le type de catégorie ne doit pas contenir de chiffres ou de symboles")]
    private ?string $type_categorie = null;

    #[ORM\OneToMany(targetEntity: Activitee::class, mappedBy: 'categorie')]
    private Collection $activitee;

    public function __construct()
    {
        $this->activitee = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTypeCategorie(): ?string
    {
        return $this->type_categorie;
    }

    public function setTypeCategorie(string $type_categorie): static
    {
        $this->type_categorie = $type_categorie;

        return $this;
    }

    /**
     * @return Collection<int, activitee>
     */
    public function getActivitee(): Collection
    {
        return $this->activitee;
    }

    public function addActivitee(activitee $activitee): static
    {
        if (!$this->activitee->contains($activitee)) {
            $this->activitee->add($activitee);
            $activitee->setCategorie($this);
        }

        return $this;
    }

    public function removeActivitee(activitee $activitee): static
    {
        if ($this->activitee->removeElement($activitee)) {
            // set the owning side to null (unless already changed)
            if ($activitee->getCategorie() === $this) {
                $activitee->setCategorie(null);
            }
        }

        return $this;
    }

   
}
