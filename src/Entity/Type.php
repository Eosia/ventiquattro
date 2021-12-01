<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping\OrderBy;


/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 */
class Type
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Vin::class, mappedBy="type")
     * @OrderBy({"nom" = "ASC"})
     */
    private $vins;

    /**
     * @Gedmo\Slug(fields={"nom"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __toString()
    {
        return $this->getNom();
    }

    public function __construct()
    {
        $this->vins = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Vin[]
     */
    public function getVins(): Collection
    {
        return $this->vins;
    }

    public function addVin(Vin $vin): self
    {
        if (!$this->vins->contains($vin)) {
            $this->vins[] = $vin;
            $vin->setType($this);
        }

        return $this;
    }

    public function removeVin(Vin $vin): self
    {
        if ($this->vins->removeElement($vin)) {
            // set the owning side to null (unless already changed)
            if ($vin->getType() === $this) {
                $vin->setType(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }


}
