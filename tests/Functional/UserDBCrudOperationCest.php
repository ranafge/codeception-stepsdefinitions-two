<?php


namespace Tests\Functional;

use Tests\Support\FunctionalTester;
use Codeception\Scenario;
use Codeception\Attribute\Incomplete;
use Tests\Support\Helper\UserFormSelector;

class UserDBCrudOperationCest
{
    public function _before(FunctionalTester $I)
    {
        // codecept_debug($scenarion->current("env"));
        $I->amOnPage(UserFormSelector::WP_LOGIN_PAGE);
        $I->fillField(UserFormSelector::WP_USERNAME_FIELD, UserFormSelector::WP_LOGIN_USERNAME);
        $I->fillField(UserFormSelector::WP_LOGIN_PASSWORD_FIELD,  UserFormSelector::WP_LOGIN_PASSWORD);
        $I->click(UserFormSelector::WP_LOGIN_BUTTON);
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
