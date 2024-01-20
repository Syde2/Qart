<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['recette:read']],
    denormalizationContext: ['groups' => ['recette:write']],
) ]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['recette:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['recette:read', 'recette:write'])]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['recette:read', 'recette:write'])]
    private ?string $illustration = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['recette:read', 'recette:write'])]
    private ?string $lien = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(?string $illustration): static
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): static
    {
        $this->lien = $lien;

        return $this;
    }
}
