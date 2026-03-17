<?php

namespace App\Entity;

use App\Repository\SampanaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

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
    private ?int $EffectifSampana = null;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'Sampana')]
    private Collection $categorySmp;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 255)]
    private ?string $profileSampana = null;

    #[Vich\UploadableField(mapping: 'sampana_image', fileNameProperty: 'sampanaPictureName')]
    private ?File $sampanaPictureFile = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $sampanaPictureName = null;

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

    public function getProfileSampana(): ?string
    {
        return $this->profileSampana;
    }

    public function setProfileSampana(string $profileSampana): static
    {
        $this->profileSampana = $profileSampana;

        return $this;
    }

    /**
     * Get the value of sampanaPictureFile
     */ 
    public function getSampanaPictureFile()
    {
        return $this->sampanaPictureFile;
    }

    /**
     * Set the value of sampanaPictureFile
     *
     * @return  self
     */ 
    public function setSampanaPictureFile($sampanaPictureFile)
    {
        $this->sampanaPictureFile = $sampanaPictureFile;

        return $this;
    }

    /**
     * Get the value of sampanaPictureName
     */ 
    public function getSampanaPictureName()
    {
        return $this->sampanaPictureName;
    }

    /**
     * Set the value of sampanaPictureName
     *
     * @return  self
     */ 
    public function setSampanaPictureName($sampanaPictureName)
    {
        $this->sampanaPictureName = $sampanaPictureName;

        return $this;
    }
}
