<?php

namespace App\Entity;

use App\Repository\BeazinaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BeazinaRepository::class)]
class Beazina
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NomBzn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PrenomBzn = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $DateNaiss = null;

    #[ORM\Column(length: 100)]
    private ?string $LieuNaiss = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomPere = null;

    #[ORM\Column(length: 255)]
    private ?string $NomMere = null;

    #[ORM\Column(length: 255)]
    private ?string $AdressBzn = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $Asatao = null;

    #[ORM\Column(length: 255)]
    private ?string $NumeroBzn = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAd = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'beazinas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Sampana $Sampana = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomBzn(): ?string
    {
        return $this->NomBzn;
    }

    public function setNomBzn(string $NomBzn): static
    {
        $this->NomBzn = $NomBzn;

        return $this;
    }

    public function getPrenomBzn(): ?string
    {
        return $this->PrenomBzn;
    }

    public function setPrenomBzn(?string $PrenomBzn): static
    {
        $this->PrenomBzn = $PrenomBzn;

        return $this;
    }

    public function getDateNaiss(): ?\DateTime
    {
        return $this->DateNaiss;
    }

    public function setDateNaiss(\DateTime $DateNaiss): static
    {
        $this->DateNaiss = $DateNaiss;

        return $this;
    }

    public function getLieuNaiss(): ?string
    {
        return $this->LieuNaiss;
    }

    public function setLieuNaiss(string $LieuNaiss): static
    {
        $this->LieuNaiss = $LieuNaiss;

        return $this;
    }

    public function getNomPere(): ?string
    {
        return $this->NomPere;
    }

    public function setNomPere(?string $NomPere): static
    {
        $this->NomPere = $NomPere;

        return $this;
    }

    public function getNomMere(): ?string
    {
        return $this->NomMere;
    }

    public function setNomMere(string $NomMere): static
    {
        $this->NomMere = $NomMere;

        return $this;
    }

    public function getAdressBzn(): ?string
    {
        return $this->AdressBzn;
    }

    public function setAdressBzn(string $AdressBzn): static
    {
        $this->AdressBzn = $AdressBzn;

        return $this;
    }

    public function getAsatao(): ?string
    {
        return $this->Asatao;
    }

    public function setAsatao(?string $Asatao): static
    {
        $this->Asatao = $Asatao;

        return $this;
    }

    public function getNumeroBzn(): ?string
    {
        return $this->NumeroBzn;
    }

    public function setNumeroBzn(string $NumeroBzn): static
    {
        $this->NumeroBzn = $NumeroBzn;

        return $this;
    }

    public function getCreatedAd(): ?\DateTimeImmutable
    {
        return $this->createdAd;
    }

    public function setCreatedAd(\DateTimeImmutable $createdAd): static
    {
        $this->createdAd = $createdAd;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getSampana(): ?Sampana
    {
        return $this->Sampana;
    }

    public function setSampana(?Sampana $Sampana): static
    {
        $this->Sampana = $Sampana;

        return $this;
    }
}