<?php

namespace App\Entity;

use App\Repository\CompaniesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompaniesRepository::class)
 */
class Companies
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cName;

    /**
     * @ORM\OneToMany(targetEntity=PDA::class, mappedBy="pCompany")
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

    public function getCName(): ?string
    {
        return $this->cName;
    }

    public function setCName(string $cName): self
    {
        $this->cName = $cName;

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
            $pda->setPCompany($this);
        }

        return $this;
    }

    public function removePda(PDA $pda): self
    {
        if ($this->pda->removeElement($pda)) {
            // set the owning side to null (unless already changed)
            if ($pda->getPCompany() === $this) {
                $pda->setPCompany(null);
            }
        }

        return $this;
    }
}
