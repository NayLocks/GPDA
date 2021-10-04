<?php

namespace App\Entity;

use App\Repository\PDARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PDARepository::class)
 */
class PDA
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $pImei;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $pNoSerial;

    /**
     * @ORM\Column(type="integer")
     */
    private $pNoPda;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pFirstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pLastname;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $pType;

    /**
     * @ORM\Column(type="text")
     */
    private $pProblem;

    /**
     * @ORM\ManyToOne(targetEntity=Companies::class, inversedBy="pda")
     */
    private $pCompany;

    /**
     * @ORM\ManyToOne(targetEntity=SIM::class, inversedBy="pda")
     */
    private $pNoSim;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPImei(): ?string
    {
        return $this->pImei;
    }

    public function setPImei(string $pImei): self
    {
        $this->pImei = $pImei;

        return $this;
    }

    public function getPNoSerial(): ?string
    {
        return $this->pNoSerial;
    }

    public function setPNoSerial(string $pNoSerial): self
    {
        $this->pNoSerial = $pNoSerial;

        return $this;
    }

    public function getPNoPda(): ?int
    {
        return $this->pNoPda;
    }

    public function setPNoPda(int $pNoPda): self
    {
        $this->pNoPda = $pNoPda;

        return $this;
    }

    public function getPFirstname(): ?string
    {
        return $this->pFirstname;
    }

    public function setPFirstname(string $pFirstname): self
    {
        $this->pFirstname = $pFirstname;

        return $this;
    }

    public function getPLastname(): ?string
    {
        return $this->pLastname;
    }

    public function setPLastname(string $pLastname): self
    {
        $this->pLastname = $pLastname;

        return $this;
    }

    public function getPType(): ?string
    {
        return $this->pType;
    }

    public function setPType(string $pType): self
    {
        $this->pType = $pType;

        return $this;
    }

    public function getPProblem(): ?string
    {
        return $this->pProblem;
    }

    public function setPProblem(string $pProblem): self
    {
        $this->pProblem = $pProblem;

        return $this;
    }

    public function getPCompany(): ?Companies
    {
        return $this->pCompany;
    }

    public function setPCompany(?Companies $pCompany): self
    {
        $this->pCompany = $pCompany;

        return $this;
    }

    public function getPNoSim(): ?SIM
    {
        return $this->pNoSim;
    }

    public function setPNoSim(?SIM $pNoSim): self
    {
        $this->pNoSim = $pNoSim;

        return $this;
    }
}
