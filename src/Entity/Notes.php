<?php

namespace App\Entity;

use App\Repository\NotesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotesRepository::class)
 */
class Notes
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
    private $nom_note;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomNote(): ?string
    {
        return $this->nom_note;
    }

    public function setNomNote(string $nom_note): self
    {
        $this->nom_note = $nom_note;

        return $this;
    }
}
