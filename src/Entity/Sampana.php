<?php

namespace App\Entity;

use App\Repository\SampanaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use App\Entity\Fivondronana;
use App\Entity\Category;

#[ORM\Entity(repositoryClass: SampanaRepository::class)]
#[Vich\Uploadable]
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
    private ?int $effectifSampana = null;

    #[ORM\OneToMany(mappedBy: 'sampana', targetEntity: Category::class, orphanRemoval: true)]
    private Collection $categorySmp;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 255)]
    private ?string $profileSampana = null;

    #[Vich\UploadableField(mapping: 'sampana_image', fileNameProperty: 'sampanaPictureName')]
    private ?File $sampanaPictureFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sampanaPictureName = null;

    #[ORM\ManyToOne(targetEntity: Fivondronana::class, inversedBy: 'sampanas')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'RESTRICT')]
    private ?Fivondronana $fivondronana = null;

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
        return $this->effectifSampana;
    }

    public function setEffectifSampana(int $effectifSampana): static
    {
        $this->effectifSampana = $effectifSampana;
        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategorySmp(): Collection
    {
        return $this->categorySmp;
    }

    public function addCategorySmp(Category $category): static
    {
        if (!$this->categorySmp->contains($category)) {
            $this->categorySmp->add($category);
            $category->setSampana($this);
        }
        return $this;
    }

    public function removeCategorySmp(Category $category): static
    {
        if ($this->categorySmp->removeElement($category)) {
            if ($category->getSampana() === $this) {
                $category->setSampana($this);
            }
        }
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getProfileSampana(): ?string
    {
        return $this->profileSampana;
    }

    public function setProfileSampana(string $profileSampana): static
    {
        $this->profileSampana = $profileSampana;
        return $this;
    }

    public function getSampanaPictureFile(): ?File
    {
        return $this->sampanaPictureFile;
    }

    public function setSampanaPictureFile(?File $file): void
    {
        $this->sampanaPictureFile = $file;

        if ($file) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getSampanaPictureName(): ?string
    {
        return $this->sampanaPictureName;
    }

    public function setSampanaPictureName(?string $name): void
    {
        $this->sampanaPictureName = $name;
    }

    public function getFivondronana(): ?Fivondronana
    {
        return $this->fivondronana;
    }

    public function setFivondronana(Fivondronana $fivondronana): static
    {
        $this->fivondronana = $fivondronana;

        // Synchronisation inverse
        if (!$fivondronana->getSampanas()->contains($this)) {
            $fivondronana->addSampana($this);
        }

        return $this;
    }
}
