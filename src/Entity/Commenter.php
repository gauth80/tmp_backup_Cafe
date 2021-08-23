<?php

namespace App\Entity;

use App\Repository\CommenterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommenterRepository::class)
 */
class Commenter
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
    private $notre_avis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire_avis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNotreAvis(): ?string
    {
        return $this->notre_avis;
    }

    public function setNotreAvis(string $notre_avis): self
    {
        $this->notre_avis = $notre_avis;

        return $this;
    }

    public function getCommentaireAvis(): ?string
    {
        return $this->commentaire_avis;
    }

    public function setCommentaireAvis(?string $commentaire_avis): self
    {
        $this->commentaire_avis = $commentaire_avis;

        return $this;
    }
}
