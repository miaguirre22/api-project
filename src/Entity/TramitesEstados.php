<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TramitesEstadosRepository")
 */
class TramitesEstados
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
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tramites", mappedBy="estado")
     */
    private $tramites;

    public function __construct()
    {
        $this->tramites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return Collection|Tramites[]
     */
    public function getTramites(): Collection
    {
        return $this->tramites;
    }

    public function addTramite(Tramites $tramite): self
    {
        if (!$this->tramites->contains($tramite)) {
            $this->tramites[] = $tramite;
            $tramite->setEstado($this);
        }

        return $this;
    }

    public function removeTramite(Tramites $tramite): self
    {
        if ($this->tramites->contains($tramite)) {
            $this->tramites->removeElement($tramite);
            // set the owning side to null (unless already changed)
            if ($tramite->getEstado() === $this) {
                $tramite->setEstado(null);
            }
        }

        return $this;
    }
}
