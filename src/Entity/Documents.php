<?php

namespace App\Entity;

use App\Repository\DocumentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentsRepository::class)
 */
class Documents
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=PDA::class, inversedBy="documents")
     */
    private $dNoPda;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dPath;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $dType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dPathLaPoste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dMontant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDNoPda(): ?PDA
    {
        return $this->dNoPda;
    }

    public function setDNoPda(?PDA $dNoPda): self
    {
        $this->dNoPda = $dNoPda;

        return $this;
    }

    public function getDDate(): ?\DateTimeInterface
    {
        return $this->dDate;
    }

    public function setDDate(\DateTimeInterface $dDate): self
    {
        $this->dDate = $dDate;

        return $this;
    }

    public function getDPath(): ?string
    {
        return $this->dPath;
    }

    public function setDPath(string $dPath): self
    {
        $this->dPath = $dPath;

        return $this;
    }

    public function getDType(): ?string
    {
        return $this->dType;
    }

    public function setDType(string $dType): self
    {
        $this->dType = $dType;

        return $this;
    }

    public function getDPathLaPoste(): ?string
    {
        return $this->dPathLaPoste;
    }

    public function setDPathLaPoste(string $dPathLaPoste): self
    {
        $this->dPathLaPoste = $dPathLaPoste;

        return $this;
    }

    public function getDMontant(): ?string
    {
        return $this->dMontant;
    }

    public function setDMontant(string $dMontant): self
    {
        $this->dMontant = $dMontant;

        return $this;
    }
}
