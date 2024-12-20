<?php


namespace Tests\Functional;

use Tests\Support\FunctionalTester;
use Tests\Support\Helper\UserFormSelector;
use Codeception\Attribute\Skip;
use Codeception\Scenario;

class AdvanceExampleCest
{
    #[Skip]
    public function _before(FunctionalTester $I) {}

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        // codecept_debug($scenarion->current("env"));
        $I->amOnPage(UserFormSelector::WP_LOGIN_PAGE);
        $I->fillField(UserFormSelector::WP_USERNAME_FIELD, UserFormSelector::WP_LOGIN_USERNAME);
        $I->fillField(UserFormSelector::WP_LOGIN_PASSWORD_FIELD,  UserFormSelector::WP_LOGIN_PASSWORD);
        $I->click(UserFormSelector::WP_LOGIN_BUTTON);
    }

    #[Skip("This is not needed anymore.")]
    public function notImportantTest(FunctionalTester $I) {}
}
