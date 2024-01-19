<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
#[ApiResource]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Ingredient $ingredient = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteDisponible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIngredient(): ?Ingredient
    {
        return $this->ingredient;
    }

    public function setIngredient(?Ingredient $ingredient): static
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    public function getQuantiteDisponible(): ?int
    {
        return $this->quantiteDisponible;
    }

    public function setQuantiteDisponible(?int $quantiteDisponible): static
    {
        $this->quantiteDisponible = $quantiteDisponible;

        return $this;
    }
}
