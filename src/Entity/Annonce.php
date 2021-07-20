<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
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
    private $LieuDepart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LieuArrivee;

    /**
     * @ORM\Column(type="date")
     */
    private $HeureDepart;

    /**
     * @ORM\Column(type="integer")
     */
    private $PrixTrajet;

    /**
     * @ORM\Column(type="integer")
     */
    private $PlacesDisponibles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Chauffeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Vehicule;

    /**
     * @ORM\Column(type="date")
     */
    private $DatePublication;

    /**
     * @ORM\Column(type="date")
     */
    private $DateExpiration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EtatAnnonce;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieuDepart(): ?string
    {
        return $this->LieuDepart;
    }

    public function setLieuDepart(string $LieuDepart): self
    {
        $this->LieuDepart = $LieuDepart;

        return $this;
    }

    public function getLieuArrivee(): ?string
    {
        return $this->LieuArrivee;
    }

    public function setLieuArrivee(string $LieuArrivee): self
    {
        $this->LieuArrivee = $LieuArrivee;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->HeureDepart;
    }

    public function setHeureDepart(\DateTimeInterface $HeureDepart): self
    {
        $this->HeureDepart = $HeureDepart;

        return $this;
    }

    public function getPrixTrajet(): ?int
    {
        return $this->PrixTrajet;
    }

    public function setPrixTrajet(int $PrixTrajet): self
    {
        $this->PrixTrajet = $PrixTrajet;

        return $this;
    }

    public function getPlacesDisponibles(): ?int
    {
        return $this->PlacesDisponibles;
    }

    public function setPlacesDisponibles(int $PlacesDisponibles): self
    {
        $this->PlacesDisponibles = $PlacesDisponibles;

        return $this;
    }

    public function getChauffeur(): ?string
    {
        return $this->Chauffeur;
    }

    public function setChauffeur(string $Chauffeur): self
    {
        $this->Chauffeur = $Chauffeur;

        return $this;
    }

    public function getVehicule(): ?string
    {
        return $this->Vehicule;
    }

    public function setVehicule(string $Vehicule): self
    {
        $this->Vehicule = $Vehicule;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->DatePublication;
    }

    public function setDatePublication(\DateTimeInterface $DatePublication): self
    {
        $this->DatePublication = $DatePublication;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->DateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $DateExpiration): self
    {
        $this->DateExpiration = $DateExpiration;

        return $this;
    }

    public function getEtatAnnonce(): ?string
    {
        return $this->EtatAnnonce;
    }

    public function setEtatAnnonce(string $EtatAnnonce): self
    {
        $this->EtatAnnonce = $EtatAnnonce;

        return $this;
    }
}
