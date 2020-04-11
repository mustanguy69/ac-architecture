<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServicesRepository")
 * @Vich\Uploadable
 */
class Services
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $contentHtml;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="image")
    * @var File
    */
    private $imageFile;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $sch;

    /**
    * @Vich\UploadableField(mapping="schema", fileNameProperty="sch")
    * @var File
    */
    private $schFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $arrete;

    /**
    * @Vich\UploadableField(mapping="arrete", fileNameProperty="arrete")
    * @var File
    */
    private $arreteFile;


   /**
    * @ORM\Column(type="datetime")
    * @var \DateTime
    */
    private $updatedAt;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContentHtml(): ?string
    {
        return $this->contentHtml;
    }

    public function setContentHtml(string $contentHtml): self
    {
        $this->contentHtml = $contentHtml;

        return $this;
    }

    public function setImageFile(File $image = null)
    {
       $this->imageFile = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getImageFile()
    {
       return $this->imageFile;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function setSchFile(File $sch = null)
    {
       $this->schFile = $sch;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($sch) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getSchFile()
    {
       return $this->schFile;
    }

    public function getSch(): ?string
    {
        return $this->sch;
    }

    public function setSch(?string $sch): self
    {
        $this->sch = $sch;

        return $this;
    }

    public function setArreteFile(File $arrete = null)
    {
       $this->arreteFile = $arrete;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($arrete) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getArreteFile()
    {
       return $this->arreteFile;
    }

    public function getArrete(): ?string
    {
        return $this->arrete;
    }

    public function setArrete(?string $arrete): self
    {
        $this->arrete = $arrete;

        return $this;
    }
}
