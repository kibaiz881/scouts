<?php

namespace App\Entity;

use App\Repository\FivondronanaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Attribute as Vich;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: FivondronanaRepository::class)]
#[Vich\Uploadable]
class Fivondronana
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $codeFiv = null;

    #[ORM\Column(length: 100)]
    private ?string $nomFiv = null;

    #[ORM\Column(length: 200)]
    private ?string $adresseFiv = null;

    #[ORM\Column(length: 100)]
    private ?string $paroiseFiv = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 18)]
    private ?string $contactFiv = null;

    #[ORM\Column(length: 255)]
    private ?string $emailFiv = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $historiqueFiv = null;

    // Relation OneToMany vers Sampana
    #[ORM\OneToMany(mappedBy: 'fivondronana', targetEntity: Sampana::class, orphanRemoval: true)]
    private Collection $sampanas;



    #[Vich\UploadableField(mapping: 'fivondronana_image', fileNameProperty: 'fivondronanaPictureName')]
    private ?File $fivondronanaPictureFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fivondronanaPictureName = null;

    public function __construct()
    {
        $this->sampanas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeFiv(): ?string
    {
        return $this->codeFiv;
    }

    public function setCodeFiv(string $codeFiv): static
    {
        $this->codeFiv = $codeFiv;
        return $this;
    }

    public function getNomFiv(): ?string
    {
        return $this->nomFiv;
    }

    public function setNomFiv(string $nomFiv): static
    {
        $this->nomFiv = $nomFiv;
        return $this;
    }

    public function getAdresseFiv(): ?string
    {
        return $this->adresseFiv;
    }

    public function setAdresseFiv(string $adresseFiv): static
    {
        $this->adresseFiv = $adresseFiv;
        return $this;
    }

    public function getParoiseFiv(): ?string
    {
        return $this->paroiseFiv;
    }

    public function setParoiseFiv(string $paroiseFiv): static
    {
        $this->paroiseFiv = $paroiseFiv;
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

    public function getContactFiv(): ?string
    {
        return $this->contactFiv;
    }

    public function setContactFiv(string $contactFiv): static
    {
        $this->contactFiv = $contactFiv;
        return $this;
    }

    public function getEmailFiv(): ?string
    {
        return $this->emailFiv;
    }

    public function setEmailFiv(string $emailFiv): static
    {
        $this->emailFiv = $emailFiv;
        return $this;
    }

    public function getHistoriqueFiv(): ?string
    {
        return $this->historiqueFiv;
    }

    public function setHistoriqueFiv(string $historiqueFiv): static
    {
        $this->historiqueFiv = $historiqueFiv;
        return $this;
    }

    /**
     * @return Collection<int, Sampana>
     */
    public function getSampanas(): Collection
    {
        return $this->sampanas;
    }

    public function addSampana(Sampana $sampana): static
    {
        if (!$this->sampanas->contains($sampana)) {
            $this->sampanas->add($sampana);
            $sampana->setFivondronana($this); // synchronisation inverse
        }

        return $this;
    }

    public function removeSampana(Sampana $sampana): static
    {
        if ($this->sampanas->removeElement($sampana)) {
            // ⚠️ Ne pas mettre à null si la relation est non nullable
        }

        return $this;
    }

    /**
     * Get the value of fivondronanaPictureFile
     */ 
    public function getFivondronanaPictureFile()
    {
        return $this->fivondronanaPictureFile;
    }

    /**
     * Set the value of fivondronanaPictureFile
     *
     * @return  self
     */ 
    public function setFivondronanaPictureFile($fivondronanaPictureFile)
    {
        $this->fivondronanaPictureFile = $fivondronanaPictureFile;

        return $this;
    }

    /**
     * Get the value of fivondronanaPictureName
     */ 
    public function getFivondronanaPictureName()
    {
        return $this->fivondronanaPictureName;
    }

    /**
     * Set the value of fivondronanaPictureName
     *
     * @return  self
     */ 
    public function setFivondronanaPictureName($fivondronanaPictureName)
    {
        $this->fivondronanaPictureName = $fivondronanaPictureName;

        return $this;
    }
}
