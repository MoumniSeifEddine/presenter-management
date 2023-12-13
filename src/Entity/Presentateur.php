<?php

namespace App\Entity;

use App\Repository\PresentateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PresentateurRepository::class)
 */
class Presentateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=Role::class, inversedBy="presentateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity=Numero::class, mappedBy="presentateur", orphanRemoval=true)
     */
    private $numeros;

    public function __construct()
    {
        $this->numeros = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection<int, Numero>
     */
    public function getNumeros(): Collection
    {
        return $this->numeros;
    }

    public function addNumero(Numero $numero): self
    {
        if (!$this->numeros->contains($numero)) {
            $this->numeros[] = $numero;
            $numero->setPresentateur($this);
        }

        return $this;
    }

    public function removeNumero(Numero $numero): self
    {
        if ($this->numeros->removeElement($numero)) {
            // set the owning side to null (unless already changed)
            if ($numero->getPresentateur() === $this) {
                $numero->setPresentateur(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }
}
