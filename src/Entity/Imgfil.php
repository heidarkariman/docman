<?php

namespace App\Entity;

use App\Repository\ImgfilRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImgfilRepository::class)]
class Imgfil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $pth = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Imgtyp $imgtyp = null;

    #[ORM\ManyToOne]
    private ?Mimtyp $mimtyp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPth(): ?string
    {
        return $this->pth;
    }

    public function setPth(string $pth): self
    {
        $this->pth = $pth;

        return $this;
    }

    public function getImgtyp(): ?Imgtyp
    {
        return $this->imgtyp;
    }

    public function setImgtyp(?Imgtyp $imgtyp): self
    {
        $this->imgtyp = $imgtyp;

        return $this;
    }

    public function getMimtyp(): ?Mimtyp
    {
        return $this->mimtyp;
    }

    public function setMimtyp(?Mimtyp $mimtyp): self
    {
        $this->mimtyp = $mimtyp;

        return $this;
    }
}
