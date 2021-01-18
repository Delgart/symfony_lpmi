<?php

namespace App\Entity;

use App\Repository\CakeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CakeRepository::class)
 */
class Cake
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cake;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isSweet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCake(): ?string
    {
        return $this->Cake;
    }

    public function setCake(string $Cake): self
    {
        $this->Cake = $Cake;

        return $this;
    }

    public function getIsSweet(): ?bool
    {
        return $this->isSweet;
    }

    public function setIsSweet(bool $isSweet): self
    {
        $this->isSweet = $isSweet;

        return $this;
    }
}
