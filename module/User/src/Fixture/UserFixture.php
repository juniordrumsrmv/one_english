<?php

namespace User\Fixture;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use User\Entity\User;

class UserFixture implements FixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUserId("bianou@oneenglish.com")
            ->setUserName("Bianou Oliveira")
            ->setUserPassword(password_hash('123456',PASSWORD_DEFAULT));
        $manager->persist($user);
        $manager->flush();
    }
}