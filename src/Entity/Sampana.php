<?php

namespace App\Entity;

use App\Repository\SampanaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SampanaRepository::class)]
class Sampana
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $codeSampana = null;

    #[ORM\Column(length: 50)]
    private ?string $nomSampana = null;

    #[ORM\Column]
    private ?int $EffectifSampana = null;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'Sampana')]
    private Collection $categorySmp;

    public function __construct()
    {
        $this->categorySmp = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeSampana(): ?string
    {
        return $this->codeSampana;
    }

    public function setCodeSampana(string $codeSampana): static
    {
        $this->codeSampana = $codeSampana;

        return $this;
    }

    public function getNomSampana(): ?string
    {
        return $this->nomSampana;
    }

    public function setNomSampana(string $nomSampana): static
    {
        $this->nomSampana = $nomSampana;

        return $this;
    }

    public function getEffectifSampana(): ?int
    {
        return $this->EffectifSampana;
    }

    public function setEffectifSampana(int $EffectifSampana): static
    {
        $this->EffectifSampana = $EffectifSampana;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategorySmp(): Collection
    {
        return $this->categorySmp;
    }

    public function addCategorySmp(Category $categorySmp): static
    {
        if (!$this->categorySmp->contains($categorySmp)) {
            $this->categorySmp->add($categorySmp);
            $categorySmp->setSampana($this);
        }

        return $this;
    }

    public function removeCategorySmp(Category $categorySmp): static
    {
        if ($this->categorySmp->removeElement($categorySmp)) {
            // set the owning side to null (unless already changed)
            if ($categorySmp->getSampana() === $this) {
                $categorySmp->setSampana(null);
            }
        }

        return $this;
    }
}
