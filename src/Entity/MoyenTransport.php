<?php

namespace App\Entity;

use App\Repository\MoyenTransportRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\PseudoTypes\False_;
use Symfony\Component\Mime\Message;
use Symfony\Component\Validator\Constraints as Assert ;

#[ORM\Entity(repositoryClass: MoyenTransportRepository::class)]
class MoyenTransport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Ce champ est obligatoire !")]
    #[Assert\Length(max: 255, maxMessage: "Le type ne doit pas dépasser {{ limit }} caractères.")]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Ce champ est obligatoire !")]
    #[Assert\GreaterThan(value: 0, message: "La capacité doit être supérieure à 0.")]
    #[Assert\Type(type: 'integer', message: "La capacité doit être un nombre entier.")]
    private ?int $capacite = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Ce champ est obligatoire !")]
    #[Assert\Length(max: 255, maxMessage: "Le lieu ne doit pas dépasser {{ limit }} caractères.")]
    private ?string $lieu = null;

    #[ORM\Column(type: 'boolean')]
    private ?bool $etat = null;

    #[ORM\OneToMany(targetEntity: Trajet::class, mappedBy: 'MoyenTransport')]
    private Collection $trajets;

    #[ORM\Column(type: 'boolean')]
    private ?bool $valide = false;

    #[ORM\Column(length: 255)]
    
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'Transports')]
    private ?User $user = null;
    public function __construct()
    {
        $this->trajets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(?int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;

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

    /**
     * @return Collection<int, Trajet>
     */
    public function getTrajets(): Collection
    {
        return $this->trajets;
    }

    public function addTrajet(Trajet $trajet): static
    {
        if (!$this->trajets->contains($trajet)) {
            $this->trajets->add($trajet);
            $trajet->setMoyenTransport($this);
        }

        return $this;
    }

    public function removeTrajet(Trajet $trajet): static
    {
        if ($this->trajets->removeElement($trajet)) {
            // set the owning side to null (unless already changed)
            if ($trajet->getMoyenTransport() === $this) {
                $trajet->setMoyenTransport(null);
            }
        }

        return $this;
    }

    public function isValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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
