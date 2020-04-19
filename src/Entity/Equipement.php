<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipementRepository")
 * @Vich\Uploadable
 */
class Equipement
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $thumbnail;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="thumbnail")
     * @var File
     */
    private $thumbnailFile;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentRightHtml;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentBottomHtml;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image1;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="image1")
     * @var File
     */
    private $image1File;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image2;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="image2")
     * @var File
     */
    private $image2File;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image3;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="image3")
     * @var File
     */
    private $image3File;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image4;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="image4")
     * @var File
     */
    private $image4File;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image5;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="image5")
     * @var File
     */
    private $image5File;

         /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image6;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="image6")
     * @var File
     */
    private $image6File;


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
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

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

        $slugger = new AsciiSlugger();
        $value = $slugger->slug($title);
        $this->setSlug($value->folded()->toString());

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

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getContentRightHtml(): ?string
    {
        return $this->contentRightHtml;
    }

    public function setContentRightHtml(?string $contentRightHtml): self
    {
        $this->contentRightHtml = $contentRightHtml;

        return $this;
    }

    public function getContentBottomHtml(): ?string
    {
        return $this->contentBottomHtml;
    }

    public function setContentBottomHtml(?string $contentBottomHtml): self
    {
        $this->contentBottomHtml = $contentBottomHtml;

        return $this;
    }

    public function setImage1File(File $image = null)
    {
        $this->image1File = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImage1File()
    {
        return $this->image1File;
    }

    public function getImage1()
    {
        return $this->image1;
    }

    public function setImage1($image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function setImage2File(File $image = null)
    {
        $this->image2File = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImage2File()
    {
        return $this->image2File;
    }

    public function getImage2()
    {
        return $this->image2;
    }

    public function setImage2($image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function setImage3File(File $image = null)
    {
        $this->image3File = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImage3File()
    {
        return $this->image3File;
    }

    public function getImage3()
    {
        return $this->image3;
    }

    public function setImage3($image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function setImage4File(File $image = null)
    {
        $this->image4File = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImage4File()
    {
        return $this->image4File;
    }

    public function getImage4()
    {
        return $this->image4;
    }

    public function setImage4($image4): self
    {
        $this->image4 = $image4;

        return $this;
    }

    public function setImage5File(File $image = null)
    {
        $this->image5File = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImage5File()
    {
        return $this->image5File;
    }

    public function getImage5()
    {
        return $this->image5;
    }

    public function setImage5($image5): self
    {
        $this->image5 = $image5;

        return $this;
    }

    public function setImage6File(File $image = null)
    {
        $this->image6File = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImage6File()
    {
        return $this->image6File;
    }

    public function getImage6()
    {
        return $this->image6;
    }

    public function setImage6($image6): self
    {
        $this->image6 = $image6;

        return $this;
    }

    public function getProjectFile()
    {
        return $this->projectFile;
    }

    public function setProjectFile($projectFile): self
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

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }

}
