<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementRepository::class)]
class Equipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $Parking = null;

    #[ORM\Column]
    private ?int $nbrChambre = null;

    #[ORM\Column]
    private ?bool $internet = null;

    #[ORM\Column]
    private ?bool $climatisation = null;

    #[ORM\Column(length: 255)]
    private ?string $TypesDeChambre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isParking(): ?bool
    {
        return $this->Parking;
    }

    public function setParking(bool $Parking): static
    {
        $this->Parking = $Parking;

        return $this;
    }

    public function getNbrChambre(): ?int
    {
        return $this->nbrChambre;
    }

    public function setNbrChambre(int $nbrChambre): static
    {
        $this->nbrChambre = $nbrChambre;

        return $this;
    }

    public function isInternet(): ?bool
    {
        return $this->internet;
    }

    public function setInternet(bool $internet): static
    {
        $this->internet = $internet;

        return $this;
    }

    public function isClimatisation(): ?bool
    {
        return $this->climatisation;
    }

    public function setClimatisation(bool $climatisation): static
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    public function getTypesDeChambre(): ?string
    {
        return $this->TypesDeChambre;
    }

    public function setTypesDeChambre(string $TypesDeChambre): static
    {
        $this->TypesDeChambre = $TypesDeChambre;

        return $this;
    }
}
