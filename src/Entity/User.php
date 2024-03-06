<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_COLLAB = 'ROLE_COLLAB';
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message:"ajouter votre email svp")]
    #[Assert\Email(message:"ajouter un email vailde svp")]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Assert\NotBlank(message:"ajouter votre mot de passe svp")]
    #[Assert\Length(min: 3, minMessage: "Le mot de passe doit contenir au moins {{ limit }} caractères")]
    #[Assert\Regex(
        pattern: '/^(?=.*[a-zA-Z])(?=.*\d).+$/',
        message: "Le mot de passe doit contenir à la fois des lettres et des chiffres"
    )]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"ajouter votre nom d'utilisateur svp")]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"ajouter votre nom svp")]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"ajouter votre prénom svp")]
    private ?string $lastName = null;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

   

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity:Reclamation::class)]
    private Collection $reclamations;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Logement::class)]
    private Collection $logements;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Activitee::class)]
    private Collection $activites;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: MoyenTransport::class)]
    private Collection $Transports;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $resetToken;

    

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
        $this->logements = new ArrayCollection();
        $this->activites = new ArrayCollection();
        $this->Transports = new ArrayCollection();
    }

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): ?array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }
    public function getRoleTitle(): string
    {
        if (in_array(self::ROLE_ADMIN, $this->roles)) {
            return "Administrateur";
        } elseif (in_array(self::ROLE_COLLAB, $this->roles)) {
            return "Collaborateur"; // Change the role title for ROLE_COLLAB
        } else {
            return "Utilisateur";
        }
    }
    
     public function getSalt()
     {}

    
 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return Collection<int, reclamation>
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): static
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setUser($this);
        }

        return $this;
    }

    public function removeReclamation(reclamation $reclamation): static
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getUser() === $this) {
                $reclamation->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Logement>
     */
    public function getLogements(): Collection
    {
        return $this->logements;
    }

    public function addLogement(Logement $logement): static
    {
        if (!$this->logements->contains($logement)) {
            $this->logements->add($logement);
            $logement->setUser($this);
        }

        return $this;
    }

    public function removeLogement(Logement $logement): static
    {
        if ($this->logements->removeElement($logement)) {
            // set the owning side to null (unless already changed)
            if ($logement->getUser() === $this) {
                $logement->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Activitee>
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activitee $activite): static
    {
        if (!$this->activites->contains($activite)) {
            $this->activites->add($activite);
            $activite->setUser($this);
        }

        return $this;
    }

    public function removeActivite(Activitee $activite): static
    {
        if ($this->activites->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getUser() === $this) {
                $activite->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MoyenTransport>
     */
    public function getTransports(): Collection
    {
        return $this->Transports;
    }

    public function addTransport(MoyenTransport $transport): static
    {
        if (!$this->Transports->contains($transport)) {
            $this->Transports->add($transport);
            $transport->setUser($this);
        }

        return $this;
    }

    public function removeTransport(MoyenTransport $transport): static
    {
        if ($this->Transports->removeElement($transport)) {
            // set the owning side to null (unless already changed)
            if ($transport->getUser() === $this) {
                $transport->setUser(null);
            }
        }

        return $this;
    }

   

}
