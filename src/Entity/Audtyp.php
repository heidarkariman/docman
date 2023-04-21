<?php

namespace App\Entity;

use App\Repository\AudtypRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AudtypRepository::class)]
class Audtyp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxsize = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxduration = null;

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

    public function getMaxsize(): ?int
    {
        return $this->maxsize;
    }

    public function setMaxsize(?int $maxsize): self
    {
        $this->maxsize = $maxsize;

        return $this;
    }

    public function getMaxduration(): ?int
    {
        return $this->maxduration;
    }

    public function setMaxduration(?int $maxduration): self
    {
        $this->maxduration = $maxduration;

        return $this;
    }
}
