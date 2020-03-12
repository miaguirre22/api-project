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
    private $comoSeHace;

    /**
     * @ORM\Column(type="integer")
     */
    private $tieneValor;

    /**
     * @ORM\Column(type="text")
     */
    private $cuantoVale;

    /**
     * @ORM\Column(type="text")
     */
    private $quienPuede;

    /**
     * @ORM\Column(type="text")
     */
    private $vigencia;

    /**
     * @ORM\Column(type="text")
     */
    private $cuantasAsistencias;

    /**
     * @ORM\Column(type="text")
     */
    private $tiempoEntrega;

    /**
     * @ORM\Column(type="text")
     */
    private $dondeRealizarlo;

    /**
     * @ORM\Column(type="text")
     */
    private $delegaciones;

    /**
     * @ORM\Column(type="text")
     */
    private $cuandoEsNecesario;

    /**
     * @ORM\Column(type="text")
     */
    private $observaciones;

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

    public function getTieneValor(): ?int
    {
        return $this->tieneValor;
    }

    public function setTieneValor(int $tieneValor): self
    {
        $this->tieneValor = $tieneValor;

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

    public function getQuienPuede(): ?string
    {
        return $this->quienPuede;
    }

    public function setQuienPuede(string $quienPuede): self
    {
        $this->quienPuede = $quienPuede;

        return $this;
    }

    public function getVigencia(): ?string
    {
        return $this->vigencia;
    }

    public function setVigencia(string $vigencia): self
    {
        $this->vigencia = $vigencia;

        return $this;
    }

    public function getCuantasAsistencias(): ?string
    {
        return $this->cuantasAsistencias;
    }

    public function setCuantasAsistencias(string $cuantasAsistencias): self
    {
        $this->cuantasAsistencias = $cuantasAsistencias;

        return $this;
    }

    public function getTiempoEntrega(): ?string
    {
        return $this->tiempoEntrega;
    }

    public function setTiempoEntrega(string $tiempoEntrega): self
    {
        $this->tiempoEntrega = $tiempoEntrega;

        return $this;
    }

    public function getDondeRealizarlo(): ?string
    {
        return $this->dondeRealizarlo;
    }

    public function setDondeRealizarlo(string $dondeRealizarlo): self
    {
        $this->dondeRealizarlo = $dondeRealizarlo;

        return $this;
    }

    public function getDelegaciones(): ?string
    {
        return $this->delegaciones;
    }

    public function setDelegaciones(string $delegaciones): self
    {
        $this->delegaciones = $delegaciones;

        return $this;
    }

    public function getCuandoEsNecesario(): ?string
    {
        return $this->cuandoEsNecesario;
    }

    public function setCuandoEsNecesario(string $cuandoEsNecesario): self
    {
        $this->cuandoEsNecesario = $cuandoEsNecesario;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }
}
