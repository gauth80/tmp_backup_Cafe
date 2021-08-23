<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_commande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_facturation;

    /**
     * @ORM\Column(type="date")
     */
    private $date_facturation;

    /**
     * @ORM\Column(type="date")
     */
    private $date_expedition;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresse_livraison;
    }

    public function setAdresseLivraison(string $adresse_livraison): self
    {
        $this->adresse_livraison = $adresse_livraison;

        return $this;
    }

    public function getAdresseFacturation(): ?string
    {
        return $this->adresse_facturation;
    }

    public function setAdresseFacturation(string $adresse_facturation): self
    {
        $this->adresse_facturation = $adresse_facturation;

        return $this;
    }

    public function getDateFacturation(): ?\DateTimeInterface
    {
        return $this->date_facturation;
    }

    public function setDateFacturation(\DateTimeInterface $date_facturation): self
    {
        $this->date_facturation = $date_facturation;

        return $this;
    }

    public function getDateExpedition(): ?\DateTimeInterface
    {
        return $this->date_expedition;
    }

    public function setDateExpedition(\DateTimeInterface $date_expedition): self
    {
        $this->date_expedition = $date_expedition;

        return $this;
    }
}
