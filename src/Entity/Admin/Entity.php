<?php

namespace App\Entity\Admin;

use App\Repository\Admin\EntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntityRepository::class)]
class Entity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, DateLog>
     */
    #[ORM\OneToMany(targetEntity: DateLog::class, mappedBy: 'entity')]
    private Collection $entityDateLogs;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'entity')]
    private Collection $entityImages;

    /**
     * @var Collection<int, Link>
     */
    #[ORM\OneToMany(targetEntity: Link::class, mappedBy: 'entity')]
    private Collection $entityLinks;

    /**
     * @var Collection<int, PriceLog>
     */
    #[ORM\OneToMany(targetEntity: PriceLog::class, mappedBy: 'entity')]
    private Collection $entityPriceLogs;

    /**
     * @var Collection<int, MailerLog>
     */
    #[ORM\OneToMany(targetEntity: MailerLog::class, mappedBy: 'entity')]
    private Collection $entityMailerLog;

    /**
     * @var Collection<int, Comment>
     */
    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'entity')]
    private Collection $entityComments;

    /**
     * @var Collection<int, Document>
     */
    #[ORM\OneToMany(targetEntity: Document::class, mappedBy: 'entity')]
    private Collection $entityDocuments;

    public function __construct()
    {
        $this->entityDateLogs = new ArrayCollection();
        $this->entityImages = new ArrayCollection();
        $this->entityLinks = new ArrayCollection();
        $this->entityPriceLogs = new ArrayCollection();
        $this->entityMailerLog = new ArrayCollection();
        $this->entityComments = new ArrayCollection();
        $this->entityDocuments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, DateLog>
     */
    public function getEntityDateLogs(): Collection
    {
        return $this->entityDateLogs;
    }

    public function addEntityDateLog(DateLog $entityDateLog): static
    {
        if (!$this->entityDateLogs->contains($entityDateLog)) {
            $this->entityDateLogs->add($entityDateLog);
            $entityDateLog->setEntity($this);
        }

        return $this;
    }

    public function removeEntityDateLog(DateLog $entityDateLog): static
    {
        if ($this->entityDateLogs->removeElement($entityDateLog)) {
            // set the owning side to null (unless already changed)
            if ($entityDateLog->getEntity() === $this) {
                $entityDateLog->setEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getEntityImages(): Collection
    {
        return $this->entityImages;
    }

    public function addEntityImage(Image $entityImage): static
    {
        if (!$this->entityImages->contains($entityImage)) {
            $this->entityImages->add($entityImage);
            $entityImage->setEntity($this);
        }

        return $this;
    }

    public function removeEntityImage(Image $entityImage): static
    {
        if ($this->entityImages->removeElement($entityImage)) {
            // set the owning side to null (unless already changed)
            if ($entityImage->getEntity() === $this) {
                $entityImage->setEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Link>
     */
    public function getEntityLinks(): Collection
    {
        return $this->entityLinks;
    }

    public function addEntityLink(Link $entityLink): static
    {
        if (!$this->entityLinks->contains($entityLink)) {
            $this->entityLinks->add($entityLink);
            $entityLink->setEntity($this);
        }

        return $this;
    }

    public function removeEntityLink(Link $entityLink): static
    {
        if ($this->entityLinks->removeElement($entityLink)) {
            // set the owning side to null (unless already changed)
            if ($entityLink->getEntity() === $this) {
                $entityLink->setEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PriceLog>
     */
    public function getEntityPriceLogs(): Collection
    {
        return $this->entityPriceLogs;
    }

    public function addEntityPriceLog(PriceLog $entityPriceLog): static
    {
        if (!$this->entityPriceLogs->contains($entityPriceLog)) {
            $this->entityPriceLogs->add($entityPriceLog);
            $entityPriceLog->setEntity($this);
        }

        return $this;
    }

    public function removeEntityPriceLog(PriceLog $entityPriceLog): static
    {
        if ($this->entityPriceLogs->removeElement($entityPriceLog)) {
            // set the owning side to null (unless already changed)
            if ($entityPriceLog->getEntity() === $this) {
                $entityPriceLog->setEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MailerLog>
     */
    public function getEntityMailerLog(): Collection
    {
        return $this->entityMailerLog;
    }

    public function addEntityMailerLog(MailerLog $entityMailerLog): static
    {
        if (!$this->entityMailerLog->contains($entityMailerLog)) {
            $this->entityMailerLog->add($entityMailerLog);
            $entityMailerLog->setEntity($this);
        }

        return $this;
    }

    public function removeEntityMailerLog(MailerLog $entityMailerLog): static
    {
        if ($this->entityMailerLog->removeElement($entityMailerLog)) {
            // set the owning side to null (unless already changed)
            if ($entityMailerLog->getEntity() === $this) {
                $entityMailerLog->setEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getEntityComments(): Collection
    {
        return $this->entityComments;
    }

    public function addEntityComment(Comment $entityComment): static
    {
        if (!$this->entityComments->contains($entityComment)) {
            $this->entityComments->add($entityComment);
            $entityComment->setEntity($this);
        }

        return $this;
    }

    public function removeEntityComment(Comment $entityComment): static
    {
        if ($this->entityComments->removeElement($entityComment)) {
            // set the owning side to null (unless already changed)
            if ($entityComment->getEntity() === $this) {
                $entityComment->setEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Document>
     */
    public function getEntityDocuments(): Collection
    {
        return $this->entityDocuments;
    }

    public function addEntityDocument(Document $entityDocument): static
    {
        if (!$this->entityDocuments->contains($entityDocument)) {
            $this->entityDocuments->add($entityDocument);
            $entityDocument->setEntity($this);
        }

        return $this;
    }

    public function removeEntityDocument(Document $entityDocument): static
    {
        if ($this->entityDocuments->removeElement($entityDocument)) {
            // set the owning side to null (unless already changed)
            if ($entityDocument->getEntity() === $this) {
                $entityDocument->setEntity(null);
            }
        }

        return $this;
    }
}
