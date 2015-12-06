<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use App\Entity\Post;

class TicketfixturesTest  implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $table = new Post (['title'=>'ok','body'=>'ok then']);
        $table->setId('1');
        $manager->persist($table);
        $manager->flush();
    }

}
