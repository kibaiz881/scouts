<?php

namespace App\Entity;

use App\Repository\TondroRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TondroRepository::class)]
class Tondro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $CodeT = null;

    #[ORM\Column(length: 255)]
    private ?string $Diosezy = null;

    #[ORM\Column(length: 255)]
    private ?string $Paroasy = null;

    #[ORM\Column(length: 255)]
    private ?string $Fiangonana = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $Taona = null;

    #[ORM\Column(length: 5)]
    private ?string $Batemy = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $KOMINIO = null;

    #[ORM\Column(length: 5)]
    private ?string $CONFIRMATION = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $MARIAGE = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $HAFA = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $NumFivondronana = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $SOKAJY = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $DateScout = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $Vatompanorenana = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Dingana = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $TaonaDigana = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $AndrakitraNotazomina = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $FiofananaVita = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $toerana = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $taonaFiofanana = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $filohafiofanana = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'tondros')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Beazina $beazina = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeT(): ?string
    {
        return $this->CodeT;
    }

    public function setCodeT(string $CodeT): static
    {
        $this->CodeT = $CodeT;

        return $this;
    }

    public function getDiosezy(): ?string
    {
        return $this->Diosezy;
    }

    public function setDiosezy(string $Diosezy): static
    {
        $this->Diosezy = $Diosezy;

        return $this;
    }

    public function getParoasy(): ?string
    {
        return $this->Paroasy;
    }

    public function setParoasy(string $Paroasy): static
    {
        $this->Paroasy = $Paroasy;

        return $this;
    }

    public function getFiangonana(): ?string
    {
        return $this->Fiangonana;
    }

    public function setFiangonana(string $Fiangonana): static
    {
        $this->Fiangonana = $Fiangonana;

        return $this;
    }

    public function getTaona(): ?\DateTimeImmutable
    {
        return $this->Taona;
    }

    public function setTaona(?\DateTimeImmutable $Taona): static
    {
        $this->Taona = $Taona;

        return $this;
    }

    public function getBatemy(): ?string
    {
        return $this->Batemy;
    }

    public function setBatemy(string $Batemy): static
    {
        $this->Batemy = $Batemy;

        return $this;
    }

    public function getKOMINIO(): ?string
    {
        return $this->KOMINIO;
    }

    public function setKOMINIO(?string $KOMINIO): static
    {
        $this->KOMINIO = $KOMINIO;

        return $this;
    }

    public function getCONFIRMATION(): ?string
    {
        return $this->CONFIRMATION;
    }

    public function setCONFIRMATION(string $CONFIRMATION): static
    {
        $this->CONFIRMATION = $CONFIRMATION;

        return $this;
    }

    public function getMARIAGE(): ?string
    {
        return $this->MARIAGE;
    }

    public function setMARIAGE(?string $MARIAGE): static
    {
        $this->MARIAGE = $MARIAGE;

        return $this;
    }

    public function getHAFA(): ?string
    {
        return $this->HAFA;
    }

    public function setHAFA(?string $HAFA): static
    {
        $this->HAFA = $HAFA;

        return $this;
    }

    public function getNumFivondronana(): ?string
    {
        return $this->NumFivondronana;
    }

    public function setNumFivondronana(?string $NumFivondronana): static
    {
        $this->NumFivondronana = $NumFivondronana;

        return $this;
    }

    public function getSOKAJY(): ?string
    {
        return $this->SOKAJY;
    }

    public function setSOKAJY(?string $SOKAJY): static
    {
        $this->SOKAJY = $SOKAJY;

        return $this;
    }

    public function getDateScout(): ?\DateTimeImmutable
    {
        return $this->DateScout;
    }

    public function setDateScout(?\DateTimeImmutable $DateScout): static
    {
        $this->DateScout = $DateScout;

        return $this;
    }

    public function getVatompanorenana(): ?\DateTimeImmutable
    {
        return $this->Vatompanorenana;
    }

    public function setVatompanorenana(?\DateTimeImmutable $Vatompanorenana): static
    {
        $this->Vatompanorenana = $Vatompanorenana;

        return $this;
    }

    public function getDingana(): ?string
    {
        return $this->Dingana;
    }

    public function setDingana(?string $Dingana): static
    {
        $this->Dingana = $Dingana;

        return $this;
    }

    public function getTaonaDigana(): ?\DateTimeImmutable
    {
        return $this->TaonaDigana;
    }

    public function setTaonaDigana(?\DateTimeImmutable $TaonaDigana): static
    {
        $this->TaonaDigana = $TaonaDigana;

        return $this;
    }

    public function getAndrakitraNotazomina(): ?string
    {
        return $this->AndrakitraNotazomina;
    }

    public function setAndrakitraNotazomina(?string $AndrakitraNotazomina): static
    {
        $this->AndrakitraNotazomina = $AndrakitraNotazomina;

        return $this;
    }

    public function getFiofananaVita(): ?string
    {
        return $this->FiofananaVita;
    }

    public function setFiofananaVita(?string $FiofananaVita): static
    {
        $this->FiofananaVita = $FiofananaVita;

        return $this;
    }

    public function getToerana(): ?string
    {
        return $this->toerana;
    }

    public function setToerana(?string $toerana): static
    {
        $this->toerana = $toerana;

        return $this;
    }

    public function getTaonaFiofanana(): ?\DateTimeImmutable
    {
        return $this->taonaFiofanana;
    }

    public function setTaonaFiofanana(?\DateTimeImmutable $taonaFiofanana): static
    {
        $this->taonaFiofanana = $taonaFiofanana;

        return $this;
    }

    public function getFilohafiofanana(): ?string
    {
        return $this->filohafiofanana;
    }

    public function setFilohafiofanana(?string $filohafiofanana): static
    {
        $this->filohafiofanana = $filohafiofanana;

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

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getBeazina(): ?Beazina
    {
        return $this->beazina;
    }

    public function setBeazina(?Beazina $beazina): static
    {
        $this->beazina = $beazina;

        return $this;
    }
}
