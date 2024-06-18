<?php

namespace App\DataFixtures;

use App\Entity\Word;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class WordFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $word = new Word();
        $word->setEnglishWord('rage');
        $word->setEnglishDescription('noun');
        $word->setGermanDescription('Nomen');
        $word->setProgress(1);

        $manager->persist($word);

        $word2 = new Word();
        $word2->setEnglishWord('to grit ones teeth');
        $word2->setEnglishDescription('verb');
        $word2->setGermanDescription('Verb');
        $word2->setProgress(1);

        $manager->persist($word2);

        $word3 = new Word();
        $word3->setEnglishWord('to put so. to death');
        $word3->setEnglishDescription('verb');
        $word3->setGermanDescription('Verb');
        $word3->setProgress(1);

        $manager->persist($word3);

        $word4 = new Word();
        $word4->setEnglishWord('injuries');
        $word4->setEnglishDescription('noun');
        $word4->setGermanDescription('Nomen');
        $word4->setProgress(1);

        $manager->persist($word4);

        $word5 = new Word();
        $word5->setEnglishWord('crippling');
        $word5->setEnglishDescription('adjective');
        $word5->setGermanDescription('Adjektiv');
        $word5->setProgress(1);

        $manager->persist($word5);

        $word6 = new Word();
        $word6->setEnglishWord('to behead');
        $word6->setEnglishDescription('verb');
        $word6->setGermanDescription('Verb');
        $word6->setProgress(1);

        $manager->persist($word6);

        $word7 = new Word();
        $word7->setEnglishWord('whisper');
        $word7->setEnglishDescription('verb');
        $word7->setGermanDescription('Verb');
        $word7->setProgress(1);

        $manager->persist($word7);

        $word8 = new Word();
        $word8->setEnglishWord('forgiveness');
        $word8->setEnglishDescription('noun');
        $word8->setGermanDescription('Nomen');
        $word8->setProgress(1);

        $manager->persist($word8);

        $word9 = new Word();
        $word9->setEnglishWord('to dismantle');
        $word9->setEnglishDescription('verb');
        $word9->setGermanDescription('Verb');
        $word9->setProgress(1);

        $manager->persist($word9);

        $word10 = new Word();
        $word10->setEnglishWord('brightness');
        $word10->setEnglishDescription('noun');
        $word10->setGermanDescription('Nomen');
        $word10->setProgress(1);

        $manager->persist($word10);

        $word11 = new Word();
        $word11->setEnglishWord('gleaming');
        $word11->setEnglishDescription('adjective');
        $word11->setGermanDescription('Adjektiv');
        $word11->setProgress(1);

        $manager->persist($word11);


        $word12 = new Word();
        $word12->setEnglishWord('mischief');
        $word12->setEnglishDescription('noun');
        $word12->setGermanDescription('Nomen');
        $word12->setProgress(1);

        $manager->persist($word12);

        $word13 = new Word();
        $word13->setEnglishWord('bewildered');
        $word13->setEnglishDescription('adjective');
        $word13->setGermanDescription('Adjektiv');
        $word13->setProgress(1);

        $manager->persist($word13);

        $word14 = new Word();
        $word14->setEnglishWord('to enrich');
        $word14->setEnglishDescription('verb');
        $word14->setGermanDescription('Verb');
        $word14->setProgress(1);

        $manager->persist($word14);

        $word15 = new Word();
        $word15->setEnglishWord('hardship');
        $word15->setEnglishDescription('noun');
        $word15->setGermanDescription('Nomen');
        $word15->setProgress(1);

        $manager->persist($word15);


        $word15->addTranslation($this->getReference('translation_20'));
        $word14->addTranslation($this->getReference('translation_19'));
        $word13->addTranslation($this->getReference('translation_18'));
        $word12->addTranslation($this->getReference('translation_17'));
        $word11->addTranslation($this->getReference('translation_15'));
        $word10->addTranslation($this->getReference('translation_14'));
        $word9->addTranslation($this->getReference('translation_12'));
        $word9->addTranslation($this->getReference('translation_13'));
        $word8->addTranslation($this->getReference('translation_11'));
        $word7->addTranslation($this->getReference('translation_10'));
        $word6->addTranslation($this->getReference('translation_9'));
        $word5->addTranslation($this->getReference('translation_7'));
        $word5->addTranslation($this->getReference('translation_8'));
        $word4->addTranslation($this->getReference('translation_6'));
        $word3->addTranslation($this->getReference('translation_4'));
        $word3->addTranslation($this->getReference('translation_5'));
        $word2->addTranslation($this->getReference('translation_3'));
        $word->addTranslation($this->getReference('translation_1'));
        $word->addTranslation($this->getReference('translation_2'));


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
