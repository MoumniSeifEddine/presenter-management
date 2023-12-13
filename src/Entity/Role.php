<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
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
    private $libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\OneToMany(targetEntity=Presentateur::class, mappedBy="role")
     */
    private $presentateurs;

    public function __construct()
    {
        $this->presentateurs = new ArrayCollection();
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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection<int, Presentateur>
     */
    public function getPresentateurs(): Collection
    {
        return $this->presentateurs;
    }

    public function addPresentateur(Presentateur $presentateur): self
    {
        if (!$this->presentateurs->contains($presentateur)) {
            $this->presentateurs[] = $presentateur;
            $presentateur->setRole($this);
        }

        return $this;
    }

    public function removePresentateur(Presentateur $presentateur): self
    {
        if ($this->presentateurs->removeElement($presentateur)) {
            // set the owning side to null (unless already changed)
            if ($presentateur->getRole() === $this) {
                $presentateur->setRole(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->libelle;
    }
}
