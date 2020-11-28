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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe1Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe1Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe1Role2;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe2Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe2Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe2Role2;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe3Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe3Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe3Role2;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe4Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe4Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe4Role2;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe5Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe5Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe5Role2;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe6Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe6Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe6Role2;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe7Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe7Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe7Role2;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe8Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe8Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe8Role2;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe8")
    * @var File
    */
    private $equipe8File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe8Cv;


        /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe9Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe9Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe9Role2;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe9")
    * @var File
    */
    private $equipe9File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe9Cv;


        /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe10Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe10Role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipe10Role2;

    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="equipe10")
    * @var File
    */
    private $equipe10File;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $equipe10Cv;

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

    public function getEquipe1Name(): ?string
    {
        return $this->equipe1Name;
    }

    public function setEquipe1Name(?string $equipe1Name): self
    {
        $this->equipe1Name = $equipe1Name;

        return $this;
    }

    public function getEquipe1Role(): ?string
    {
        return $this->equipe1Role;
    }

    public function setEquipe1Role(?string $equipe1Role): self
    {
        $this->equipe1Role = $equipe1Role;

        return $this;
    }

    public function getEquipe1Role2(): ?string
    {
        return $this->equipe1Role2;
    }

    public function setEquipe1Role2(?string $equipe1Role2): self
    {
        $this->equipe1Role2 = $equipe1Role2;

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

    public function getEquipe2Name(): ?string
    {
        return $this->equipe2Name;
    }

    public function setEquipe2Name(?string $equipe2Name): self
    {
        $this->equipe2Name = $equipe2Name;

        return $this;
    }

    public function getEquipe2Role(): ?string
    {
        return $this->equipe2Role;
    }

    public function setEquipe2Role(?string $equipe2Role): self
    {
        $this->equipe2Role = $equipe2Role;

        return $this;
    }

    public function getEquipe2Role2(): ?string
    {
        return $this->equipe2Role2;
    }

    public function setEquipe2Role2(?string $equipe2Role2): self
    {
        $this->equipe2Role2 = $equipe2Role2;

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

    public function getEquipe3Name(): ?string
    {
        return $this->equipe3Name;
    }

    public function setEquipe3Name(?string $equipe3Name): self
    {
        $this->equipe3Name = $equipe3Name;

        return $this;
    }

    public function getEquipe3Role(): ?string
    {
        return $this->equipe3Role;
    }

    public function setEquipe3Role(?string $equipe3Role): self
    {
        $this->equipe3Role = $equipe3Role;

        return $this;
    }

    public function getEquipe3Role2(): ?string
    {
        return $this->equipe3Role2;
    }

    public function setEquipe3Role2(?string $equipe3Role2): self
    {
        $this->equipe3Role2 = $equipe3Role2;

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

    public function getEquipe4Name(): ?string
    {
        return $this->equipe4Name;
    }

    public function setEquipe4Name(?string $equipe4Name): self
    {
        $this->equipe4Name = $equipe4Name;

        return $this;
    }

    public function getEquipe4Role(): ?string
    {
        return $this->equipe4Role;
    }

    public function setEquipe4Role(?string $equipe4Role): self
    {
        $this->equipe4Role = $equipe4Role;

        return $this;
    }

    public function getEquipe4Role2(): ?string
    {
        return $this->equipe4Role2;
    }

    public function setEquipe4Role2(?string $equipe4Role2): self
    {
        $this->equipe4Role2 = $equipe4Role2;

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

    public function getEquipe5Name(): ?string
    {
        return $this->equipe5Name;
    }

    public function setEquipe5Name(?string $equipe5Name): self
    {
        $this->equipe5Name = $equipe5Name;

        return $this;
    }

    public function getEquipe5Role(): ?string
    {
        return $this->equipe5Role;
    }

    public function setEquipe5Role(?string $equipe5Role): self
    {
        $this->equipe5Role = $equipe5Role;

        return $this;
    }

    public function getEquipe5Role2(): ?string
    {
        return $this->equipe5Role2;
    }

    public function setEquipe5Role2(?string $equipe5Role2): self
    {
        $this->equipe5Role2 = $equipe5Role2;

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

    public function getEquipe6Name(): ?string
    {
        return $this->equipe6Name;
    }

    public function setEquipe6Name(?string $equipe6Name): self
    {
        $this->equipe6Name = $equipe6Name;

        return $this;
    }

    public function getEquipe6Role(): ?string
    {
        return $this->equipe6Role;
    }

    public function setEquipe6Role(?string $equipe6Role): self
    {
        $this->equipe6Role = $equipe6Role;

        return $this;
    }

    public function getEquipe6Role2(): ?string
    {
        return $this->equipe6Role2;
    }

    public function setEquipe6Role2(?string $equipe6Role2): self
    {
        $this->equipe6Role2 = $equipe6Role2;

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

    public function getEquipe7Name(): ?string
    {
        return $this->equipe7Name;
    }

    public function setEquipe7Name(?string $equipe7Name): self
    {
        $this->equipe7Name = $equipe7Name;

        return $this;
    }

    public function getEquipe7Role(): ?string
    {
        return $this->equipe7Role;
    }

    public function setEquipe7Role(?string $equipe7Role): self
    {
        $this->equipe7Role = $equipe7Role;

        return $this;
    }

    public function getEquipe7Role2(): ?string
    {
        return $this->equipe7Role2;
    }

    public function setEquipe7Role2(?string $equipe7Role2): self
    {
        $this->equipe7Role2 = $equipe7Role2;

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

    public function setEquipe8File(File $image = null)
    {
       $this->equipe8File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe8File()
    {
       return $this->equipe8File;
    }

    public function getEquipe8(): ?string
    {
        return $this->equipe8;
    }

    public function setEquipe8(?string $equipe8): self
    {
        $this->equipe8 = $equipe8;

        return $this;
    }

    public function getEquipe8Name(): ?string
    {
        return $this->equipe8Name;
    }

    public function setEquipe8Name(?string $equipe8Name): self
    {
        $this->equipe8Name = $equipe8Name;

        return $this;
    }

    public function getEquipe8Role(): ?string
    {
        return $this->equipe8Role;
    }

    public function setEquipe8Role(?string $equipe8Role): self
    {
        $this->equipe8Role = $equipe8Role;

        return $this;
    }

    public function getEquipe8Role2(): ?string
    {
        return $this->equipe8Role2;
    }

    public function setEquipe8Role2(?string $equipe8Role2): self
    {
        $this->equipe8Role2 = $equipe8Role2;

        return $this;
    }

    public function getEquipe8Cv(): ?string
    {
        return $this->equipe8Cv;
    }

    public function setEquipe8Cv(string $equipe8Cv): self
    {
        $this->equipe8Cv = $equipe8Cv;

        return $this;
    }

    public function setEquipe9File(File $image = null)
    {
       $this->equipe9File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe9File()
    {
       return $this->equipe9File;
    }

    public function getEquipe9(): ?string
    {
        return $this->equipe9;
    }

    public function setEquipe9(?string $equipe9): self
    {
        $this->equipe9 = $equipe9;

        return $this;
    }

    public function getEquipe9Name(): ?string
    {
        return $this->equipe9Name;
    }

    public function setEquipe9Name(?string $equipe9Name): self
    {
        $this->equipe9Name = $equipe9Name;

        return $this;
    }

    public function getEquipe9Role(): ?string
    {
        return $this->equipe9Role;
    }

    public function setEquipe9Role(?string $equipe9Role): self
    {
        $this->equipe9Role = $equipe9Role;

        return $this;
    }

    public function getEquipe9Role2(): ?string
    {
        return $this->equipe9Role2;
    }

    public function setEquipe9Role2(?string $equipe9Role2): self
    {
        $this->equipe9Role2 = $equipe9Role2;

        return $this;
    }

    public function getEquipe9Cv(): ?string
    {
        return $this->equipe9Cv;
    }

    public function setEquipe9Cv(string $equipe9Cv): self
    {
        $this->equipe9Cv = $equipe9Cv;

        return $this;
    }

    public function setEquipe10File(File $image = null)
    {
       $this->equipe10File = $image;

       // VERY IMPORTANT:
       // It is required that at least one field changes if you are using Doctrine,
       // otherwise the event listeners won't be called and the file is lost
       if ($image) {
           // if 'updatedAt' is not defined in your entity, use another property
           $this->updatedAt = new \DateTime('now');
       }
    }

    public function getEquipe10File()
    {
       return $this->equipe10File;
    }

    public function getEquipe10(): ?string
    {
        return $this->equipe10;
    }

    public function setEquipe10(?string $equipe10): self
    {
        $this->equipe10 = $equipe10;

        return $this;
    }

    public function getEquipe10Name(): ?string
    {
        return $this->equipe10Name;
    }

    public function setEquipe10Name(?string $equipe10Name): self
    {
        $this->equipe10Name = $equipe10Name;

        return $this;
    }

    public function getEquipe10Role(): ?string
    {
        return $this->equipe10Role;
    }

    public function setEquipe10Role(?string $equipe10Role): self
    {
        $this->equipe10Role = $equipe10Role;

        return $this;
    }

    public function getEquipe10Role2(): ?string
    {
        return $this->equipe10Role2;
    }

    public function setEquipe10Role2(?string $equipe10Role2): self
    {
        $this->equipe10Role2 = $equipe10Role2;

        return $this;
    }

    public function getEquipe10Cv(): ?string
    {
        return $this->equipe10Cv;
    }

    public function setEquipe10Cv(string $equipe10Cv): self
    {
        $this->equipe10Cv = $equipe10Cv;

        return $this;
    }
}
