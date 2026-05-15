<?php

namespace App\Entity;

use App\Repository\VatompanorenanaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VatompanorenanaRepository::class)]
class Vatompanorenana
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $Date = null;

    #[ORM\Column(length: 50)]
    private ?string $RefVp = null;

    /**
     * @var Collection<int, Beazina>
     */
    #[ORM\OneToMany(targetEntity: Beazina::class, mappedBy: 'vatompanorenana')]
    private Collection $Beazina;

    public function __construct()
    {
        $this->Beazina = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->Date;
    }

    public function setDate(\DateTimeImmutable $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getRefVp(): ?string
    {
        return $this->RefVp;
    }

    public function setRefVp(string $RefVp): static
    {
        $this->RefVp = $RefVp;

        return $this;
    }

    /**
     * @return Collection<int, Beazina>
     */
    public function getBeazina(): Collection
    {
        return $this->Beazina;
    }

    public function addBeazina(Beazina $beazina): static
    {
        if (!$this->Beazina->contains($beazina)) {
            $this->Beazina->add($beazina);
            $beazina->setVatompanorenana($this);
        }

        return $this;
    }

    public function removeBeazina(Beazina $beazina): static
    {
        if ($this->Beazina->removeElement($beazina)) {
            // set the owning side to null (unless already changed)
            if ($beazina->getVatompanorenana() === $this) {
                $beazina->setVatompanorenana(null);
            }
        }

        return $this;
    }
}
