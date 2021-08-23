<?php

namespace App\Entity;

use App\Repository\FormatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormatsRepository::class)
 */
class Formats
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom_format;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFormat(): ?string
    {
        return $this->nom_format;
    }

    public function setNomFormat(string $nom_format): self
    {
        $this->nom_format = $nom_format;

        return $this;
    }
}
