<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MusicFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $music = new \App\Entity\Music();
        $music->setName("Break my heart")
            ->setSinger("Dua Lipa")
            ->setUrl("https://www.youtube.com/embed/Nj2U6rhnucI")
            ->setCover("https://i1.sndcdn.com/artworks-V78SOvyhOCaBHR3F-0tipuA-t500x500.jpg")
            ->setStyle("Pop");

        $manager->persist($music);

        $music2 = new \App\Entity\Music();
        $music2->setName("Sunflower")
            ->setSinger("Post Malone")
            ->setUrl("https://www.youtube.com/embed/ApXoWvfEYVU")
            ->setCover("https://i.scdn.co/image/ab67616d0000b273e2e352d89826aef6dbd5ff8f")
            ->setStyle("Pop");

        $manager->persist($music2);

        $music3 = new \App\Entity\Music();
        $music3->setName("Waka waka")
            ->setSinger("Shakira")
            ->setUrl("https://www.youtube.com/embed/pRpeEdMmmQ0")
            ->setCover("https://7zic.fr/wp-content/uploads/2018/03/cover-Shakira-Waka-Waka-1.jpg")
            ->setStyle("Pop");

        $manager->persist($music3);

        $music4 = new \App\Entity\Music();
        $music4->setName("Dance The Nigth")
            ->setSinger("Dua Lipa")
            ->setUrl("https://www.youtube.com/embed/OiC1rgCPmUQ")
            ->setCover("https://i1.sndcdn.com/artworks-ZEW8wiqV2JU7aK6e-BMGcyw-t500x500.jpg")
            ->setStyle("Pop");

        $manager->persist($music4);

        $music5 = new \App\Entity\Music();
        $music5->setName("Yellow Submarine")
            ->setSinger("Les beatles")
            ->setUrl("https://www.youtube.com/embed/m2uTFF_3MaA")
            ->setCover("https://thumb.canalplus.pro/http/unsafe/414x/smart/creativemedia-image.canalplus.pro/content/0001/25/b1a20071b9ca787ac64bc9778ef97088864fff2b.png")
            ->setStyle("Pop");

        $manager->persist($music5);

        $music6 = new \App\Entity\Music();
        $music6->setName("Sous le vent")
            ->setSinger("Celine Dion (feat Garou)")
            ->setUrl("https://www.youtube.com/embed/a2_ss9y-VjE")
            ->setCover("https://upload.wikimedia.org/wikipedia/en/d/d9/Celine-Dion-Sous-Le-Vent.jpg")
            ->setStyle("Pop");

        $manager->persist($music6);

        $manager->flush();
    }
}
