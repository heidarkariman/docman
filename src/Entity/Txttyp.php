<?php

namespace App\Entity;

use App\Repository\TxttypRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TxttypRepository::class)]
class Txttyp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Filtyp $filtyp = null;

    #[ORM\ManyToOne]
    private ?Mimtyp $mimtyp = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxsize = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFiltyp(): ?Filtyp
    {
        return $this->filtyp;
    }

    public function setFiltyp(?Filtyp $filtyp): self
    {
        $this->filtyp = $filtyp;

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

    public function getMaxsize(): ?int
    {
        return $this->maxsize;
    }

    public function setMaxsize(?int $maxsize): self
    {
        $this->maxsize = $maxsize;

        return $this;
    }
}
