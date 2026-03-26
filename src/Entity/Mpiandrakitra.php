<?php

namespace App\Entity;

use App\Repository\MpiandrakitraRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Attribute as Vich;
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

    // ✅ Immutable conseillé
    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $dateNaissMp = null;

    #[ORM\Column(length: 255)]
    private ?string $lieuNaissMp = null;

    #[ORM\ManyToOne(inversedBy: 'mpiandrakitras')]
    private ?Sampana $sampana = null;

    // ================= VICH =================

    #[Vich\UploadableField(mapping: 'mpiandrakitra_image', fileNameProperty: 'mpiandrakitraPictureName')]
    private ?File $mpiandrakitraPictureFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mpiandrakitraPictureName = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    // ================= AUTRES =================

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $professionMp = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $sexe = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $nationalite = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $paysDelivranceMp = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $dateEntrescout = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $veliranoDateMp = null;

    #[ORM\Column(length: 50)]
    private ?string $fonctionscoutMp = null;

    #[ORM\Column(length: 255)]
    private ?string $situationMatriMp = null;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    private ?int $nombreEnfantMp = null;

    #[ORM\Column(length: 100)]
    private ?string $lieuVeliranoMp = null;

    #[ORM\Column(length: 255)]
    private ?string $TompokompanompoanaMp = null;

    #[ORM\Column(length: 255)]
    private ?string $religionMp = null;

    #[ORM\Column(length: 255)]
    private ?string $lieudetravail = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

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
    public function setDateDelivraceCINMp(?\DateTimeInterface $date): static
    {
        $this->dateDelivraceCINMp = $date;
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

    public function getDateNaissMp(): ?\DateTimeImmutable
    {
        return $this->dateNaissMp;
    }
    public function setDateNaissMp(?\DateTimeImmutable $date): static
    {
        $this->dateNaissMp = $date;
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

    // ================= VICH =================

    public function setMpiandrakitraPictureFile(?File $file = null): void
    {
        $this->mpiandrakitraPictureFile = $file;

        if ($file !== null) {
            $this->updatedAt = new \DateTimeImmutable();
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

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    // ================= AUTRES =================

    public function getProfessionMp(): ?string
    {
        return $this->professionMp;
    }
    public function setProfessionMp(?string $professionMp): static
    {
        $this->professionMp = $professionMp;
        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }
    public function setSexe(?string $sexe): static
    {
        $this->sexe = $sexe;
        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }
    public function setNationalite(?string $nationalite): static
    {
        $this->nationalite = $nationalite;
        return $this;
    }

    public function getPaysDelivranceMp(): ?string
    {
        return $this->paysDelivranceMp;
    }
    public function setPaysDelivranceMp(?string $pays): static
    {
        $this->paysDelivranceMp = $pays;
        return $this;
    }

    public function getDateEntrescout(): ?\DateTimeImmutable
    {
        return $this->dateEntrescout;
    }
    public function setDateEntrescout(?\DateTimeImmutable $date): static
    {
        $this->dateEntrescout = $date;
        return $this;
    }

    public function getVeliranoDateMp(): ?\DateTimeImmutable
    {
        return $this->veliranoDateMp;
    }
    public function setVeliranoDateMp(?\DateTimeImmutable $date): static
    {
        $this->veliranoDateMp = $date;
        return $this;
    }

    public function getFonctionscoutMp(): ?string
    {
        return $this->fonctionscoutMp;
    }
    public function setFonctionscoutMp(string $val): static
    {
        $this->fonctionscoutMp = $val;
        return $this;
    }

    public function getSituationMatriMp(): ?string
    {
        return $this->situationMatriMp;
    }
    public function setSituationMatriMp(string $val): static
    {
        $this->situationMatriMp = $val;
        return $this;
    }

    public function getNombreEnfantMp(): ?int
    {
        return $this->nombreEnfantMp;
    }
    public function setNombreEnfantMp(?int $val): static
    {
        $this->nombreEnfantMp = $val;
        return $this;
    }

    public function getLieuVeliranoMp(): ?string
    {
        return $this->lieuVeliranoMp;
    }
    public function setLieuVeliranoMp(string $val): static
    {
        $this->lieuVeliranoMp = $val;
        return $this;
    }

    public function getTompokompanompoanaMp(): ?string
    {
        return $this->TompokompanompoanaMp;
    }
    public function setTompokompanompoanaMp(string $val): static
    {
        $this->TompokompanompoanaMp = $val;
        return $this;
    }

    public function getReligionMp(): ?string
    {
        return $this->religionMp;
    }
    public function setReligionMp(string $val): static
    {
        $this->religionMp = $val;
        return $this;
    }

    public function getLieudetravail(): ?string
    {
        return $this->lieudetravail;
    }
    public function setLieudetravail(string $val): static
    {
        $this->lieudetravail = $val;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }
    public function setCreatedAt(?\DateTimeImmutable $date): static
    {
        $this->createdAt = $date;
        return $this;
    }
}
