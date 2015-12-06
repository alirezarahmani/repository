<?php
require_once('TicketfixturesTest.php');
use App\Repository\PostRepo as TicketRepo;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\Common\DataFixtures\Loader;



class TicketcontrollerTest extends TestCase
{
    private $repository;
    private $loader;
    private $executor;
    private $em;

    public function setUp()
    {
        parent::setUp();
        $this->em         = App::make('Doctrine\ORM\EntityManager');
        $this->repository = new TicketRepo($this->em);
        $this->executor   = new ORMExecutor($this->em, new ORMPurger);
        $this->loader     = new Loader();
        $this->loader->addFixture(new TicketfixturesTest);
    }

    public function testFindbyId()
    {
        $this->executor->execute($this->loader->getFixtures());
        $ticket = $this->repository->PostOfId(1);
        $this->assertInstanceOf('App\Entity\Post', $ticket);
    }



}
