<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbrePlaceReservees;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ValiditePaiement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrePlaceReservees(): ?int
    {
        return $this->NbrePlaceReservees;
    }

    public function setNbrePlaceReservees(int $NbrePlaceReservees): self
    {
        $this->NbrePlaceReservees = $NbrePlaceReservees;

        return $this;
    }

    public function getValiditePaiement(): ?\DateTimeInterface
    {
        return $this->ValiditePaiement;
    }

    public function setValiditePaiement(\DateTimeInterface $ValiditePaiement): self
    {
        $this->ValiditePaiement = $ValiditePaiement;

        return $this;
    }
}
