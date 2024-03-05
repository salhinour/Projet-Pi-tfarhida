<?php

namespace App\Entity;

use App\Repository\TrajetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;

#[ORM\Entity(repositoryClass: TrajetRepository::class)]
class Trajet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"ce champ est obligatoire !")]
    private ?string $LieuDepart = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"ce champ est obligatoire !")]
    private ?string $LieuArrivee = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message:"ce champ est obligatoire !")]
    private ?\DateTimeInterface $heure = null;

    #[ORM\ManyToOne(inversedBy: 'trajets')]
    private ?MoyenTransport $MoyenTransport = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieuDepart(): ?string
    {
        return $this->LieuDepart;
    }

    public function setLieuDepart(?string $LieuDepart): static
    {
        $this->LieuDepart = $LieuDepart;

        return $this;
    }

    public function getLieuArrivee(): ?string
    {
        return $this->LieuArrivee;
    }

    public function setLieuArrivee(?string $LieuArrivee): static
    {
        $this->LieuArrivee = $LieuArrivee;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(?\DateTimeInterface $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getMoyenTransport(): ?MoyenTransport
    {
        return $this->MoyenTransport;
    }

    public function setMoyenTransport(?MoyenTransport $MoyenTransport): static
    {
        $this->MoyenTransport = $MoyenTransport;

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
   
}
