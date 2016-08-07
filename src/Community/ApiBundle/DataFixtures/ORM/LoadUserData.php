<?php
/**
 * Created by PhpStorm.
 * User: axel
 * Date: 8/6/16
 * Time: 6:00 PM
 */

namespace Community\ApiBundle\DataFixtures\ORM;


use Community\ApiBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     */
    public function load(ObjectManager $manager)
    {
        $alice = new User();
        $alice->setUsername('alice');
        $alice->setEmail('alice@alice.com');
        $alice->setPassword('123');

        $bob = new User();
        $bob->setUsername('bob');
        $bob->setEmail('bob@bob.com');
        $bob->setPassword('123');


        $manager->persist($alice);
        $manager->persist($bob);

        $manager->flush();
    }
}