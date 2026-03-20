<?php

namespace App\Entity;

use App\Repository\MpiandrakitraRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: MpiandrakitraRepository::class)]
#[Vich\Uploadable]
class Mpiandrakitra
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $codeMp = null;

    #[ORM\Column(length: 200)]
    private ?string $nomMp = null;

    #[ORM\Column(length: 100)]
    private ?string $adresseMp = null;

    #[ORM\Column(length: 20)]
    private ?string $contactMp = null;

    #[ORM\Column(length: 255)]
    private ?string $emailMp = null;

    #[ORM\Column(length: 15)]
    private ?string $cinMp = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDelivraceCINMp = null;

    #[ORM\Column(length: 255)]
    private ?string $lieuCinMp = null;

    #[ORM\Column(length: 2)]
    private ?string $ageMp = null;

    #[ORM\Column(length: 255)]
    private ?string $dateNaissMp = null;

    #[ORM\Column(length: 255)]
    private ?string $lieuNaissMp = null;

    #[ORM\ManyToOne(inversedBy: 'mpiandrakitras')]
    private ?Sampana $sampana = null;

    // VICH UPLOAD
    #[Vich\UploadableField(mapping: 'mpiandrakitra_image', fileNameProperty: 'mpiandrakitraPictureName')]
    private ?File $mpiandrakitraPictureFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mpiandrakitraPictureName = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    // ================= GETTERS & SETTERS =================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeMp(): ?string
    {
        return $this->codeMp;
    }

    public function setCodeMp(string $codeMp): static
    {
        $this->codeMp = $codeMp;
        return $this;
    }

    public function getNomMp(): ?string
    {
        return $this->nomMp;
    }

    public function setNomMp(string $nomMp): static
    {
        $this->nomMp = $nomMp;
        return $this;
    }

    public function getAdresseMp(): ?string
    {
        return $this->adresseMp;
    }

    public function setAdresseMp(string $adresseMp): static
    {
        $this->adresseMp = $adresseMp;
        return $this;
    }

    public function getContactMp(): ?string
    {
        return $this->contactMp;
    }

    public function setContactMp(string $contactMp): static
    {
        $this->contactMp = $contactMp;
        return $this;
    }

    public function getEmailMp(): ?string
    {
        return $this->emailMp;
    }

    public function setEmailMp(string $emailMp): static
    {
        $this->emailMp = $emailMp;
        return $this;
    }

    public function getCinMp(): ?string
    {
        return $this->cinMp;
    }

    public function setCinMp(string $cinMp): static
    {
        $this->cinMp = $cinMp;
        return $this;
    }

    public function getDateDelivraceCINMp(): ?\DateTimeInterface
    {
        return $this->dateDelivraceCINMp;
    }

    public function setDateDelivraceCINMp(\DateTimeInterface $dateDelivraceCINMp): static
    {
        $this->dateDelivraceCINMp = $dateDelivraceCINMp;
        return $this;
    }

    public function getLieuCinMp(): ?string
    {
        return $this->lieuCinMp;
    }

    public function setLieuCinMp(string $lieuCinMp): static
    {
        $this->lieuCinMp = $lieuCinMp;
        return $this;
    }

    public function getAgeMp(): ?string
    {
        return $this->ageMp;
    }

    public function setAgeMp(string $ageMp): static
    {
        $this->ageMp = $ageMp;
        return $this;
    }

    public function getDateNaissMp(): ?string
    {
        return $this->dateNaissMp;
    }

    public function setDateNaissMp(string $dateNaissMp): static
    {
        $this->dateNaissMp = $dateNaissMp;
        return $this;
    }

    public function getLieuNaissMp(): ?string
    {
        return $this->lieuNaissMp;
    }

    public function setLieuNaissMp(string $lieuNaissMp): static
    {
        $this->lieuNaissMp = $lieuNaissMp;
        return $this;
    }

    public function getSampana(): ?Sampana
    {
        return $this->sampana;
    }

    public function setSampana(?Sampana $sampana): static
    {
        $this->sampana = $sampana;
        return $this;
    }

    // ================= VICH METHODS =================

    public function setMpiandrakitraPictureFile(?File $file = null): void
    {
        $this->mpiandrakitraPictureFile = $file;

        if ($file !== null) {
            $this->updatedAt = new \DateTime();
        }
    }

    public function getMpiandrakitraPictureFile(): ?File
    {
        return $this->mpiandrakitraPictureFile;
    }

    public function setMpiandrakitraPictureName(?string $name): void
    {
        $this->mpiandrakitraPictureName = $name;
    }

    public function getMpiandrakitraPictureName(): ?string
    {
        return $this->mpiandrakitraPictureName;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
