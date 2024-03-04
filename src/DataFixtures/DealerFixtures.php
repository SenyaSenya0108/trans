<?php

namespace App\DataFixtures;

use App\Entity\Dealer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DealerFixtures extends Fixture
{
    final public const DEALERS = [
        0 => [
            'firstName' => 'Michael',
            'surname' => 'Lii',
            'jobTitle' => 'Head of Shipping Department'
        ],
        1 => [
            'firstName' => 'Max',
            'surname' => 'Payne',
            'jobTitle' => 'Creative department employee'
        ],
        2 => [
            'firstName' => 'Mark',
            'surname' => 'Whiles',
            'jobTitle' => 'Logistics department employee'
        ],
        3 => [
            'firstName' => 'John',
            'surname' => 'Smith',
            'jobTitle' => 'Warehouse employee'
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::DEALERS as $dealerFixture) {
            $dealer = new Dealer();
            $dealer->setFirstName($dealerFixture['firstName']);
            $dealer->setSurname($dealerFixture['surname']);
            $dealer->setJobTitle($dealerFixture['jobTitle']);

            $manager->persist($dealer);
        }

        $manager->flush();
    }
}
