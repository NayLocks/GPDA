<?php

namespace App\Entity;

use App\Repository\SettingsRetourRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SettingsRetourRepository::class)
 */
class SettingsRetour
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
    private $srCompany;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $srInterlocuteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $srAddress;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $srZipCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $srCity;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $srPhone;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $srFax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $srMail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSrCompany(): ?string
    {
        return $this->srCompany;
    }

    public function setSrCompany(string $srCompany): self
    {
        $this->srCompany = $srCompany;

        return $this;
    }

    public function getSrInterlocuteur(): ?string
    {
        return $this->srInterlocuteur;
    }

    public function setSrInterlocuteur(string $srInterlocuteur): self
    {
        $this->srInterlocuteur = $srInterlocuteur;

        return $this;
    }

    public function getSrAddress(): ?string
    {
        return $this->srAddress;
    }

    public function setSrAddress(string $srAddress): self
    {
        $this->srAddress = $srAddress;

        return $this;
    }

    public function getSrZipCode(): ?string
    {
        return $this->srZipCode;
    }

    public function setSrZipCode(string $srZipCode): self
    {
        $this->srZipCode = $srZipCode;

        return $this;
    }

    public function getSrCity(): ?string
    {
        return $this->srCity;
    }

    public function setSrCity(string $srCity): self
    {
        $this->srCity = $srCity;

        return $this;
    }

    public function getSrPhone(): ?string
    {
        return $this->srPhone;
    }

    public function setSrPhone(string $srPhone): self
    {
        $this->srPhone = $srPhone;

        return $this;
    }

    public function getSrFax(): ?string
    {
        return $this->srFax;
    }

    public function setSrFax(string $srFax): self
    {
        $this->srFax = $srFax;

        return $this;
    }

    public function getSrMail(): ?string
    {
        return $this->srMail;
    }

    public function setSrMail(string $srMail): self
    {
        $this->srMail = $srMail;

        return $this;
    }
}
