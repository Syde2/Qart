<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ApiResource(
    normalizationContext: ['groups' => ['plat:read']],
    denormalizationContext: ['groups' => ['plat:write']],

)]
#[ORM\Entity(repositoryClass: PlatRepository::class)]
class Plat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['plat:read', 'plat:write', 'calendrier:read', 'calendrier:write'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['plat:read', 'plat:write', 'calendrier:read', 'calendrier:write'])]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['plat:read', 'plat:write', 'calendrier:read', 'calendrier:write'])]
    private ?string $imageUrl = null;

    #[ORM\ManyToOne(
        inversedBy: 'plats',
        cascade: ["persist", "remove"],
    )]
    #[Groups(['plat:read', 'plat:write', 'calendrier:read', 'calendrier:write'])]
    private ?Categorie $categorie = null;

    #[ORM\OneToMany(mappedBy: 'plat', targetEntity: Calendrier::class)]
    private Collection $calendriers;

    public function __construct()
    {
        $this->calendriers = new ArrayCollection();
    }



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

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): static
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Calendrier>
     */
    public function getCalendriers(): Collection
    {
        return $this->calendriers;
    }

    public function addCalendrier(Calendrier $calendrier): static
    {
        if (!$this->calendriers->contains($calendrier)) {
            $this->calendriers->add($calendrier);
            $calendrier->setPlat($this);
        }

        return $this;
    }

    public function removeCalendrier(Calendrier $calendrier): static
    {
        if ($this->calendriers->removeElement($calendrier)) {
            // set the owning side to null (unless already changed)
            if ($calendrier->getPlat() === $this) {
                $calendrier->setPlat(null);
            }
        }

        return $this;
    }

}
