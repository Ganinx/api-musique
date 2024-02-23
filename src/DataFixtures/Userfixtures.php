<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Userfixtures extends Fixture
{
    private $hash;


    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hash = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setFirstname("Valentin")
            ->setPassword($this->hash->hashPassword($user,'Bonjour63!'))
            ->setEmail("valentin@email.fr")
            ->setLastname("Delomenie");
        $manager->persist($user);


        $admin = new User();
        $admin->setFirstname("admin")
            ->setPassword($this->hash->hashPassword($admin,'admin'))
            ->setEmail("admin@email.fr")
            ->setLastname("admin")
            ->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);

        $manager->flush();
    }
}
