<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
 * @Vich\Uploadable
 */
class Equipe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentHtml;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe1;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe1")
    * @var File
    */
    private $equipe1File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe1Cv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe2;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe2")
    * @var File
    */
    private $equipe2File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe2Cv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe3;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe3")
    * @var File
    */
    private $equipe3File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe3Cv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe4;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe4")
    * @var File
    */
    private $equipe4File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe4Cv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe5;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe5")
    * @var File
    */
    private $equipe5File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe5Cv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe6;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe6")
    * @var File
    */
    private $equipe6File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe6Cv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe7;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe7")
    * @var File
    */
    private $equipe7File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe7Cv;


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

    public function setContentHtml(?string $contentHtml): self
    {
        $this->contentHtml = $contentHtml;

        return $this;
    }

    public function setEquipe1File(File $image = null)
    {
       $this->equipe1File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe1File()
    {
       return $this->equipe1File;
    }

    public function getEquipe1(): ?string
    {
        return $this->equipe1;
    }

    public function setEquipe1(?string $equipe1): self
    {
        $this->equipe1 = $equipe1;

        return $this;
    }

    public function getEquipe1Cv(): ?string
    {
        return $this->equipe1Cv;
    }

    public function setEquipe1Cv(string $equipe1Cv): self
    {
        $this->equipe1Cv = $equipe1Cv;

        return $this;
    }

    public function setEquipe2File(File $image = null)
    {
       $this->equipe2File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe2File()
    {
       return $this->equipe2File;
    }

    public function getEquipe2(): ?string
    {
        return $this->equipe2;
    }

    public function setEquipe2(?string $equipe2): self
    {
        $this->equipe2 = $equipe2;

        return $this;
    }

    public function getEquipe2Cv(): ?string
    {
        return $this->equipe2Cv;
    }

    public function setEquipe2Cv(string $equipe2Cv): self
    {
        $this->equipe2Cv = $equipe2Cv;

        return $this;
    }

    public function setEquipe3File(File $image = null)
    {
       $this->equipe3File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe3File()
    {
       return $this->equipe3File;
    }

    public function getEquipe3(): ?string
    {
        return $this->equipe3;
    }

    public function setEquipe3(?string $equipe3): self
    {
        $this->equipe3 = $equipe3;

        return $this;
    }

    public function getEquipe3Cv(): ?string
    {
        return $this->equipe3Cv;
    }

    public function setEquipe3Cv(string $equipe3Cv): self
    {
        $this->equipe3Cv = $equipe3Cv;

        return $this;
    }

    public function setEquipe4File(File $image = null)
    {
       $this->equipe4File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe4File()
    {
       return $this->equipe4File;
    }

    public function getEquipe4(): ?string
    {
        return $this->equipe4;
    }

    public function setEquipe4(?string $equipe4): self
    {
        $this->equipe4 = $equipe4;

        return $this;
    }

    public function getEquipe4Cv(): ?string
    {
        return $this->equipe4Cv;
    }

    public function setEquipe4Cv(string $equipe4Cv): self
    {
        $this->equipe4Cv = $equipe4Cv;

        return $this;
    }

    public function setEquipe5File(File $image = null)
    {
       $this->equipe5File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe5File()
    {
       return $this->equipe5File;
    }

    public function getEquipe5(): ?string
    {
        return $this->equipe5;
    }

    public function setEquipe5(?string $equipe5): self
    {
        $this->equipe5 = $equipe5;

        return $this;
    }

    public function getEquipe5Cv(): ?string
    {
        return $this->equipe5Cv;
    }

    public function setEquipe5Cv(string $equipe5Cv): self
    {
        $this->equipe5Cv = $equipe5Cv;

        return $this;
    }

    public function setEquipe6File(File $image = null)
    {
       $this->equipe6File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe6File()
    {
       return $this->equipe6File;
    }

    public function getEquipe6(): ?string
    {
        return $this->equipe6;
    }

    public function setEquipe6(?string $equipe6): self
    {
        $this->equipe6 = $equipe6;

        return $this;
    }

    public function getEquipe6Cv(): ?string
    {
        return $this->equipe6Cv;
    }

    public function setEquipe6Cv(string $equipe6Cv): self
    {
        $this->equipe6Cv = $equipe6Cv;

        return $this;
    }

    public function setEquipe7File(File $image = null)
    {
       $this->equipe7File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe7File()
    {
       return $this->equipe7File;
    }

    public function getEquipe7(): ?string
    {
        return $this->equipe7;
    }

    public function setEquipe7(?string $equipe7): self
    {
        $this->equipe7 = $equipe7;

        return $this;
    }

    public function getEquipe7Cv(): ?string
    {
        return $this->equipe7Cv;
    }

    public function setEquipe7Cv(string $equipe7Cv): self
    {
        $this->equipe7Cv = $equipe7Cv;

        return $this;
    }
}
