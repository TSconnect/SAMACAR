<?php

namespace App\Entity;

use App\Repository\TrajetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrajetRepository::class)
 */
class Trajet
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
    private $EtatTrajet;

    /**
     * @ORM\Column(type="time")
     */
    private $Debut;

    /**
     * @ORM\Column(type="time")
     */
    private $finTrajet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtatTrajet(): ?string
    {
        return $this->EtatTrajet;
    }

    public function setEtatTrajet(string $EtatTrajet): self
    {
        $this->EtatTrajet = $EtatTrajet;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->Debut;
    }

    public function setDebut(\DateTimeInterface $Debut): self
    {
        $this->Debut = $Debut;

        return $this;
    }

    public function getFinTrajet(): ?\DateTimeInterface
    {
        return $this->finTrajet;
    }

    public function setFinTrajet(\DateTimeInterface $finTrajet): self
    {
        $this->finTrajet = $finTrajet;

        return $this;
    }
}
