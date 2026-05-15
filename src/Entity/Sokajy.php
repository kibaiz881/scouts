<?php

namespace App\Entity;

use App\Repository\SokajyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SokajyRepository::class)]
class Sokajy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $NomSokajy = null;

    #[ORM\Column]
    private ?int $EffectifSokajy = null;

    #[ORM\Column(length: 255)]
    private ?string $HiakaSokajy = null;

    /**
     * @var Collection<int, Beazina>
     */
    #[ORM\OneToMany(targetEntity: Beazina::class, mappedBy: 'sokajy')]
    private Collection $beazinas;

    public function __construct()
    {
        $this->beazinas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSokajy(): ?string
    {
        return $this->NomSokajy;
    }

    public function setNomSokajy(string $NomSokajy): static
    {
        $this->NomSokajy = $NomSokajy;

        return $this;
    }

    public function getEffectifSokajy(): ?int
    {
        return $this->EffectifSokajy;
    }

    public function setEffectifSokajy(int $EffectifSokajy): static
    {
        $this->EffectifSokajy = $EffectifSokajy;

        return $this;
    }

    public function getHiakaSokajy(): ?string
    {
        return $this->HiakaSokajy;
    }

    public function setHiakaSokajy(string $HiakaSokajy): static
    {
        $this->HiakaSokajy = $HiakaSokajy;

        return $this;
    }

    /**
     * @return Collection<int, Beazina>
     */
    public function getBeazinas(): Collection
    {
        return $this->beazinas;
    }

    public function addBeazina(Beazina $beazina): static
    {
        if (!$this->beazinas->contains($beazina)) {
            $this->beazinas->add($beazina);
            $beazina->setSokajy($this);
        }

        return $this;
    }

    public function removeBeazina(Beazina $beazina): static
    {
        if ($this->beazinas->removeElement($beazina)) {
            // set the owning side to null (unless already changed)
            if ($beazina->getSokajy() === $this) {
                $beazina->setSokajy(null);
            }
        }

        return $this;
    }
}
