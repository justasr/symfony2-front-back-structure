<?php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ReviewsBundle\Entity\Review;
use UserBundle\Entity\User;


class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setFirstname('Justinas');
        $userAdmin->setLastname('Lastname');
        $manager->persist($userAdmin);
        $manager->flush();


        $review = new  Review();
        $review->setTitle('Title');
        $review->setBody('Content');
        $review->setUser($userAdmin);
        $manager->persist($review);
        $manager->flush();


    }
}