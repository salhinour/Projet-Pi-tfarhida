<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\Column(length: 255)]
    private ?string $link = null;

    #[ORM\Column(type: "datetime")]
    private DateTime $created_at;

    #[ORM\ManyToOne(inversedBy: 'notifications')]
    private ?Reclamation $reclamation = null;



    public function __construct() {
        $this->created_at = new DateTime();
    }
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        if ($this->created_at === null) {
            $this->created_at = new \DateTime();
        }
    }
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }
    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        $this->reclamation = $reclamation;

        return $this;
    }
}
