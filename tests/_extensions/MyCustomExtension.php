<?php 

namespace tests\_extensions;



use Codeception\Extension;
use Codeception\Event\TestEvent;
use Codeception\Event\FailEvent;
use Codeception\Event\SuiteEvent;
use Codeception\Event\StepEvent;
use Codeception\Event\PrintResultEvent;
use Codeception\Events;
class MyCustomExtension extends \Codeception\Extension 
{
    public static $events = [
        Events::TEST_BEFORE => 'beforeTest',
        Events::TEST_FAIL   => 'testFailed',
        Events::SUITE_AFTER => 'afterSuite',
    ];
    public function beforeTest(\Codeception\Event\TestEvent $e) 
    {
        $this->writeln("[INFO] Test started: " . $e->getTest()->getName());
    }
    public function testFailed(\Codeception\Event\FailEvent $e) 
    {
        $this->writeln("[ERROR] Test failed: " . $e->getTest()->getName());
        $this->writeln("Failure message: " . $e->getFail()->getMessage());
    }
    public function afterSuite(\Codeception\Event\SuiteEvent $e)
    {
        $this->writeln("[INFO] Suite completed: " . $e->getSuite()->getName());
    }
}

