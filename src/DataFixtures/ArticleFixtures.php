<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setName('der');
        $this->addReference('der', $article);
        $manager->persist($article);

        $article2 = new Article();
        $article2->setName('die');
        $this->addReference('die', $article2);
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setName('das');
        $this->addReference('das', $article3);
        $manager->persist($article3);

        $manager->flush();
    }
}
