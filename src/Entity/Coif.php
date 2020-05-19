<?php

namespace App\Entity;

use App\Repository\CoifRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use

/**
 * @ORM\Entity(repositoryClass=CoifRepository::class)
 * @Vich\Uploadable()
 */
class Coif
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomPro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomPro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomSalon;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreChaise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LogoCoif;

    /**
     * @Vich\UploadableField(mapping="coif_pic",fileNameProperty="LogoCoif")
     */
    private $LogoFile;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PhotoCoif;

    /**
     * @Vich\UploadableField(mapping="coif_pic",fileNameProperty="PhotoCoif")
     */
    private $PhotoFile;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Publish;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPro(): ?string
    {
        return $this->NomPro;
    }

    public function setNomPro(string $NomPro): self
    {
        $this->NomPro = $NomPro;

        return $this;
    }

    public function getPrenomPro(): ?string
    {
        return $this->PrenomPro;
    }

    public function setPrenomPro(string $PrenomPro): self
    {
        $this->PrenomPro = $PrenomPro;

        return $this;
    }

    public function getNomSalon(): ?string
    {
        return $this->NomSalon;
    }

    public function setNomSalon(string $NomSalon): self
    {
        $this->NomSalon = $NomSalon;

        return $this;
    }

    public function getNombreChaise(): ?int
    {
        return $this->NombreChaise;
    }

    public function setNombreChaise(int $NombreChaise): self
    {
        $this->NombreChaise = $NombreChaise;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getLogoCoif(): ?string
    {
        return $this->LogoCoif;
    }

    public function setLogoCoif(string $LogoCoif): self
    {
        $this->LogoCoif = $LogoCoif;

        return $this;
    }

    public function getPhotoCoif(): ?string
    {
        return $this->PhotoCoif;
    }

    public function setPhotoCoif(string $PhotoCoif): self
    {
        $this->PhotoCoif = $PhotoCoif;

        return $this;
    }

    public function getPublish(): ?bool
    {
        return $this->Publish;
    }

    public function setPublish(?bool $Publish): self
    {
        $this->Publish = $Publish;

        return $this;
    }

    public function __toString()
    {
        return $this->NomPro;
    }
}
