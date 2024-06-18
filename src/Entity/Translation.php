<?php

namespace App\Entity;

use App\Repository\TranslationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TranslationRepository::class)]
class Translation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $germanTranslation = null;

    

    #[ORM\ManyToOne(inversedBy: 'translations')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Word $word = null;

    #[ORM\ManyToOne(inversedBy: 'translations')]
    private ?Article $article = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGermanTranslation(): ?string
    {
        return $this->germanTranslation;
    }

    public function setGermanTranslation(string $germanTranslation): static
    {
        $this->germanTranslation = $germanTranslation;

        return $this;
    }


    public function getWord(): ?Word
    {
        return $this->word;
    }

    public function setWord(?Word $word): static
    {
        $this->word = $word;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): static
    {
        $this->article = $article;

        return $this;
    }
}
