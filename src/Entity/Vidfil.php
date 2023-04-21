<?php

namespace App\Entity;

use App\Repository\VidfilRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VidfilRepository::class)]
class Vidfil
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
    private ?Vidtyp $vidtyp = null;

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

    public function getVidtyp(): ?Vidtyp
    {
        return $this->vidtyp;
    }

    public function setVidtyp(?Vidtyp $vidtyp): self
    {
        $this->vidtyp = $vidtyp;

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
