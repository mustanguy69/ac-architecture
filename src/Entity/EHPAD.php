<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EHPADRepository")
 * @Vich\Uploadable
 */
class EHPAD
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thumbnail;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="thumbnail")
    * @var File
    */
    private $thumbnailFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $headerImg;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="headerImg")
    * @var File
    */
    private $headerImgFile;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentHtml;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sideImg1;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="sideImg1")
    * @var File
    */
    private $sideImg1File;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sideImg2;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="sideImg2")
    * @var File
    */
    private $sideImg2File;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sideImg3;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="sideImg3")
    * @var File
    */
    private $sideImg3File;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $projectFile;

    /**
    * @Vich\UploadableField(mapping="fiches", fileNameProperty="projectFile")
    * @var File
    */
    private $projectFileFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
     private $updatedAt;

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

    public function setThumbnailFile(File $image = null)
    {
       $this->thumbnailFile = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getThumbnailFile()
    {
       return $this->thumbnailFile;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function setHeaderImgFile(File $image = null)
    {
       $this->headerImgFile = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getHeaderImgFile()
    {
       return $this->headerImgFile;
    }

    public function getHeaderImg(): ?string
    {
        return $this->headerImg;
    }

    public function setHeaderImg(string $headerImg): self
    {
        $this->headerImg = $headerImg;

        return $this;
    }

    public function getContentHtml(): ?string
    {
        return $this->contentHtml;
    }

    public function setContentHtml(?string $contentHtml): self
    {
        $this->contentHtml = $contentHtml;

        return $this;
    }

    public function setSideImg1File(File $image = null)
    {
       $this->sideImg1File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getSideImg1File()
    {
       return $this->sideImg1File;
    }

    public function getSideImg1(): ?string
    {
        return $this->sideImg1;
    }

    public function setSideImg1(?string $sideImg1): self
    {
        $this->sideImg1 = $sideImg1;

        return $this;
    }

    public function setSideImg2File(File $image = null)
    {
       $this->sideImg2File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getSideImg2File()
    {
       return $this->sideImg2File;
    }

    public function getSideImg2(): ?string
    {
        return $this->sideImg2;
    }

    public function setSideImg2(?string $sideImg2): self
    {
        $this->sideImg2 = $sideImg2;

        return $this;
    }

    public function setSideImg3File(File $image = null)
    {
       $this->sideImg3File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getSideImg3File()
    {
       return $this->sideImg3File;
    }

    public function getSideImg3(): ?string
    {
        return $this->sideImg3;
    }

    public function setSideImg3(?string $sideImg3): self
    {
        $this->sideImg3 = $sideImg3;

        return $this;
    }

    public function getProjectFile(): ?string
    {
        return $this->projectFile;
    }

    public function setProjectFile(?string $projectFile): self
    {
        $this->projectFile = $projectFile;

        return $this;
    }

    public function setProjectFileFile(File $file = null)
    {
       $this->projectFileFile = $file;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($file) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getProjectFileFile()
    {
       return $this->projectFileFile;
    }
}
