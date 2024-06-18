<?php

namespace App\DataFixtures;

use App\Entity\Translation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TranslationFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        $translation1 = new Translation();
        $translation1->setGermanTranslation('Wut');
        $this->addReference('translation_1', $translation1);
        $translation1->setArticle($this->getReference('die'));
        $manager->persist($translation1);

        $translation2 = new Translation();
        $translation2->setGermanTranslation('Zorn');
        $this->addReference('translation_2', $translation2);
        $translation2->setArticle($this->getReference('der'));

        $manager->persist($translation2);

        $translation3 = new Translation();
        $translation3->setGermanTranslation('die Zähne zusammenbeißen');
        $this->addReference('translation_3', $translation3);
        $manager->persist($translation3);

        $translation4 = new Translation();
        $translation4->setGermanTranslation('jemanden hinrichten');
        $this->addReference('translation_4', $translation4);
        $manager->persist($translation4);

        $translation5 = new Translation();
        $translation5->setGermanTranslation('jemanden töten');
        $this->addReference('translation_5', $translation5);
        $manager->persist($translation5);

        $translation6 = new Translation();
        $translation6->setGermanTranslation('Verletzungen');
        $this->addReference('translation_6', $translation6);
        $translation6->setArticle($this->getReference('die'));

        $manager->persist($translation6);

        $translation7 = new Translation();
        $translation7->setGermanTranslation('lähmend');
        $this->addReference('translation_7', $translation7);
        $manager->persist($translation7);

        $translation8 = new Translation();
        $translation8->setGermanTranslation('verkrüppelnd');
        $this->addReference('translation_8', $translation8);
        $manager->persist($translation8);

        $translation9 = new Translation();
        $translation9->setGermanTranslation('köpfen');
        $this->addReference('translation_9', $translation9);
        $manager->persist($translation9);

        $translation10 = new Translation();
        $translation10->setGermanTranslation('flüstern');
        $this->addReference('translation_10', $translation10);
        $manager->persist($translation10);

        $translation11 = new Translation();
        $translation11->setGermanTranslation('Vergebung');
        $this->addReference('translation_11', $translation11);
        $translation11->setArticle($this->getReference('die'));

        $manager->persist($translation11);

        $translation12 = new Translation();
        $translation12->setGermanTranslation('abbauen');
        $this->addReference('translation_12', $translation12);
        $manager->persist($translation12);

        $translation13 = new Translation();
        $translation13->setGermanTranslation('demontieren');
        $this->addReference('translation_13', $translation13);
        $manager->persist($translation13);

        $translation14 = new Translation();
        $translation14->setGermanTranslation('Helligkeit');
        $this->addReference('translation_14', $translation14);
        $translation14->setArticle($this->getReference('die'));

        $manager->persist($translation14);

        $translation15 = new Translation();
        $translation15->setGermanTranslation('glänzend');
        $this->addReference('translation_15', $translation15);
        $manager->persist($translation15);

        $translation16 = new Translation();
        $translation16->setGermanTranslation('lauschen');
        $this->addReference('translation_16', $translation16);
        $manager->persist($translation16);

        $translation17 = new Translation();
        $translation17->setGermanTranslation('Unfug');
        $this->addReference('translation_17', $translation17);
        $translation17->setArticle($this->getReference('der'));

        $manager->persist($translation17);

        $translation18 = new Translation();
        $translation18->setGermanTranslation('verwirrt');
        $this->addReference('translation_18', $translation18);
        $manager->persist($translation18);

        $translation19 = new Translation();
        $translation19->setGermanTranslation('bereichern');
        $this->addReference('translation_19', $translation19);
        $manager->persist($translation19);

        $translation20 = new Translation();
        $translation20->setGermanTranslation('Not');
        $this->addReference('translation_20', $translation20);
        $translation20->setArticle($this->getReference('die'));

        $manager->persist($translation20);




        $manager->flush();
    }


}
