<?php

namespace App\Entity;

use App\Repository\LivrerProdRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivrerProdRepository::class)
 */
class LivrerProd
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
    private $quantite_livre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteLivre(): ?int
    {
        return $this->quantite_livre;
    }

    public function setQuantiteLivre(int $quantite_livre): self
    {
        $this->quantite_livre = $quantite_livre;

        return $this;
    }
}
