<?php

namespace App\Entity;

use App\Repository\WordRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WordRepository::class)]
class Word
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $englishWord = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $englishDescription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $germanDescription = null;

    #[ORM\Column]
    private ?int $progress = 1;


    /**
     * @var Collection<int, Translation>
     */
    /**
     * @var Collection<int, Translation>
     */
    #[ORM\OneToMany(targetEntity: Translation::class, mappedBy: 'word', cascade: ["persist"])]
    private Collection $translations;

    public function __construct()
    {
        $this->translations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnglishWord(): ?string
    {
        return $this->englishWord;
    }

    public function setEnglishWord(string $englishWord): static
    {
        $this->englishWord = $englishWord;

        return $this;
    }

    public function getEnglishDescription(): ?string
    {
        return $this->englishDescription;
    }

    public function setEnglishDescription(?string $englishDescription): static
    {
        $this->englishDescription = $englishDescription;

        return $this;
    }

    public function getGermanDescription(): ?string
    {
        return $this->germanDescription;
    }

    public function setGermanDescription(?string $germanDescription): static
    {
        $this->germanDescription = $germanDescription;

        return $this;
    }

    public function getProgress(): ?int
    {
        return $this->progress;
    }

    public function setProgress(int $progress): static
    {
        $this->progress = $progress;

        return $this;
    }


    /**
     * @return Collection<int, Translation>
     */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(Translation $translation): self
    {
        if (!$this->translations->contains($translation)) {
            $this->translations[] = $translation;
            $translation->setWord($this);
        }

        return $this;
    }

       public function removeTranslation(Translation $translation): self
{
    if ($this->translations->removeElement($translation)) {
        // set the owning side to null (unless already changed)
        if ($translation->getWord() === $this) {
            $translation->setWord(null);
        }
    }

    return $this;
}
}
