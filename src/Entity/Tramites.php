<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TramitesRepository")
 */
class Tramites
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
    private $titulo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="text")
     */
    private $documentacion;

    /**
     * @ORM\Column(type="text")
     */
    private $requisitos;

    /**
     * @ORM\Column(type="text")
     */
    private $ComoSeHace;

    /**
     * @ORM\Column(type="text")
     */
    private $comoSeHace;

    /**
     * @ORM\Column(type="text")
     */
    private $cuantoVale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getDocumentacion(): ?string
    {
        return $this->documentacion;
    }

    public function setDocumentacion(string $documentacion): self
    {
        $this->documentacion = $documentacion;

        return $this;
    }

    public function getRequisitos(): ?string
    {
        return $this->requisitos;
    }

    public function setRequisitos(string $requisitos): self
    {
        $this->requisitos = $requisitos;

        return $this;
    }

    public function getComoSeHace(): ?string
    {
        return $this->ComoSeHace;
    }

    public function setComoSeHace(string $ComoSeHace): self
    {
        $this->ComoSeHace = $ComoSeHace;

        return $this;
    }

    public function getCuantoVale(): ?string
    {
        return $this->cuantoVale;
    }

    public function setCuantoVale(string $cuantoVale): self
    {
        $this->cuantoVale = $cuantoVale;

        return $this;
    }
}
