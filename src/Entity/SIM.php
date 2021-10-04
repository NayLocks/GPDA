<?php

namespace App\Entity;

use App\Repository\SIMRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SIMRepository::class)
 */
class SIM
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
    private $sNoPhone;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $sNoSim;

    /**
     * @ORM\OneToMany(targetEntity=PDA::class, mappedBy="pNoSim")
     */
    private $pda;

    public function __construct()
    {
        $this->pda = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSNoPhone(): ?string
    {
        return $this->sNoPhone;
    }

    public function setSNoPhone(string $sNoPhone): self
    {
        $this->sNoPhone = $sNoPhone;

        return $this;
    }

    public function getSNoSim(): ?string
    {
        return $this->sNoSim;
    }

    public function setSNoSim(string $sNoSim): self
    {
        $this->sNoSim = $sNoSim;

        return $this;
    }

    /**
     * @return Collection|PDA[]
     */
    public function getPda(): Collection
    {
        return $this->pda;
    }

    public function addPda(PDA $pda): self
    {
        if (!$this->pda->contains($pda)) {
            $this->pda[] = $pda;
            $pda->setPNoSim($this);
        }

        return $this;
    }

    public function removePda(PDA $pda): self
    {
        if ($this->pda->removeElement($pda)) {
            // set the owning side to null (unless already changed)
            if ($pda->getPNoSim() === $this) {
                $pda->setPNoSim(null);
            }
        }

        return $this;
    }
}
