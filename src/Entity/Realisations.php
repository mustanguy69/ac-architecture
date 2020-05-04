<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * @ORM\Entity(repositoryClass="App\Repository\RealisationsRepository")
 * @Vich\Uploadable
 */
class Realisations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=255, nullable=true)
     */
    private $displayLimit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entete;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="entete")
     * @var File
     */
    private $enteteFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDisplayLimit(): ?int
    {
        return $this->displayLimit;
    }

    public function setDisplayLimit(?int $displayLimit): self
    {
        $this->displayLimit = $displayLimit;

        return $this;
    }

    public function setEnteteFile(File $image = null)
    {
        $this->enteteFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getEnteteFile()
    {
        return $this->enteteFile;
    }

    public function getEntete()
    {
        return $this->entete;
    }

    public function setEntete($entete): self
    {
        $this->entete = $entete;

        return $this;
    }
}
