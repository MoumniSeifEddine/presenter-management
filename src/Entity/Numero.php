<?php

namespace App\Entity;

use App\Repository\NumeroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NumeroRepository::class)
 */
class Numero
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
    private $titre;

    /**
     * @ORM\Column(type="time")
     */
    private $duree;

    /**
     * @ORM\ManyToOne(targetEntity=Presentateur::class, inversedBy="numeros")
     * @ORM\JoinColumn(nullable=false)
     */
    private $presentateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(): self
    {
        $this->id = $id;
        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getPresentateur(): ?Presentateur
    {
        return $this->presentateur;
    }

    public function setPresentateur(?Presentateur $presentateur): self
    {
        $this->presentateur = $presentateur;

        return $this;
    }
    public function __toString()
    {
        return $this->libelle;
    }

}
