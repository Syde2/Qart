<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\QuantitesIngredientsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuantitesIngredientsRepository::class)]
#[ApiResource(
    shortName:'quantite',

)]
class QuantitesIngredients
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(
        cascade: ["persist", "remove"],
    )]
    #[Groups([ 'recette:write'])]
    private ?Ingredient $ingredient = null;

    #[ORM\Column]
    #[Groups([ 'recette:write'])]
    private ?int $quantite = null;

    #[ORM\ManyToOne(
        cascade: ["persist", "remove"],

    )]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recette $recette = null;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getRecette(): ?Recette
    {
        return $this->recette;
    }

    public function setRecette(?Recette $recette): static
    {
        $this->recette = $recette;

        return $this;
    }
}
