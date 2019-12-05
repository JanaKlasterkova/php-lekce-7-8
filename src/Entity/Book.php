<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pocet_stran;

    /**
     * @ORM\Column(type="text")
     */
    private $autor;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $rok_vydani;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cena;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPocetStran(): ?string
    {
        return $this->pocet_stran;
    }

    public function setPocetStran(string $pocet_stran): self
    {
        $this->pocet_stran = $pocet_stran;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getRokVydani(): ?string
    {
        return $this->rok_vydani;
    }

    public function setRokVydani(string $rok_vydani): self
    {
        $this->rok_vydani = $rok_vydani;

        return $this;
    }

    public function getCena(): ?string
    {
        return $this->cena;
    }

    public function setCena(string $cena): self
    {
        $this->cena = $cena;

        return $this;
    }
}
