<?php

namespace Tests\Support\Helper;

class MyExtendedSelenium extends \Codeception\Module\WebDriver
{


public function customMethod()
{
    $this->debug('Custom method in MyExtendedSelenium executed');
}

}
