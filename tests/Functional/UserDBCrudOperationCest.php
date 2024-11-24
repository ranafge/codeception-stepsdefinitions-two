<?php


namespace Tests\Functional;

use Tests\Support\FunctionalTester;
use Codeception\Scenario;
use Codeception\Attribute\Incomplete;

class UserDBCrudOperationCest
{
    public function _before(FunctionalTester $I)
    {
        // codecept_debug($scenarion->current("env"));
        $I->loginWpAdmin();
    }

    // tests
    // #[Incomplete('I will implement it tomorrow, I promise')]
    public function tryToTest(FunctionalTester $I, \Codeception\Scenario $scenario)
    {

        print_r("xxxx " . codecept_debug($scenario->current("env")));
        print_r("xxxx " . codecept_debug($scenario->current("name")));
        print_r("xxxx " . codecept_debug($scenario->current("browser")));
    }
}
