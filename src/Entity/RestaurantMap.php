<?php

namespace App\Entity;

use App\Repository\RestaurantMapRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurantMapRepository::class)]
class RestaurantMap
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?array $map = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getMap(): ?array
    {
        return $this->map;
    }

    public function setMap(?array $map): static
    {
        $this->map = $map;

        return $this;
    }
}
