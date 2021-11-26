<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VegaMissileRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VegaMissileRepository::class)]
#[ApiResource(
    itemOperations:['get','put','delete'] 
)]

class VegaMissile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $foo;

    #[ORM\Column(type: 'string', length: 255)]
    private $Rapide;

    #[ORM\Column(type: 'string', length: 255)]
    private $Tunage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoo(): ?string
    {
        return $this->foo;
    }

    public function setFoo(string $foo): self
    {
        $this->foo = $foo;

        return $this;
    }

    public function getRapide(): ?string
    {
        return $this->Rapide;
    }

    public function setRapide(string $Rapide): self
    {
        $this->Rapide = $Rapide;

        return $this;
    }

    public function getTunage(): ?string
    {
        return $this->Tunage;
    }

    public function setTunage(string $Tunage): self
    {
        $this->Tunage = $Tunage;

        return $this;
    }
}
