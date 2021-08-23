<?php

namespace App\Entity;

use App\Repository\BonDeLivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BonDeLivraisonRepository::class)
 */
class BonDeLivraison
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
    private $date_livraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->date_livraison;
    }

    public function setDateLivraison(\DateTimeInterface $date_livraison): self
    {
        $this->date_livraison = $date_livraison;

        return $this;
    }
}
