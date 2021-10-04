<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $uUsername;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uPassword;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uMail;

    /**
     * @ORM\Column(type="integer")
     */
    private $uIsActived;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUUsername(): ?string
    {
        return $this->uUsername;
    }

    public function setUUsername(string $uUsername): self
    {
        $this->uUsername = $uUsername;

        return $this;
    }

    public function getUPassword(): ?string
    {
        return $this->uPassword;
    }

    public function setUPassword(string $uPassword): self
    {
        $this->uPassword = $uPassword;

        return $this;
    }

    public function getUName(): ?string
    {
        return $this->uName;
    }

    public function setUName(string $uName): self
    {
        $this->uName = $uName;

        return $this;
    }

    public function getUMail(): ?string
    {
        return $this->uMail;
    }

    public function setUMail(string $uMail): self
    {
        $this->uMail = $uMail;

        return $this;
    }

    public function getUIsActived(): ?int
    {
        return $this->uIsActived;
    }

    public function setUIsActived(int $uIsActived): self
    {
        $this->uIsActived = $uIsActived;

        return $this;
    }
}
