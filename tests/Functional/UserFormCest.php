<?php


namespace Tests\Functional;


use Tests\Support\FunctionalTester;
use Tests\Support\Helper\UserFormSelector;
use Codeception\Attribute\Group;

class UserFormCest
{
    public function _before(FunctionalTester $I) {}

    // tests
    public function tryToTest(FunctionalTester $I) {}

    #[Group('Admin')]
    #[Group("editor")]
    public function example(FunctionalTester $I) {
        $I->amOnPage(UserFormSelector::WP_LOGIN_PAGE);
        $I->fillField(UserFormSelector::WP_USERNAME_FIELD, UserFormSelector::WP_LOGIN_USERNAME);
        $I->fillField(UserFormSelector::WP_LOGIN_PASSWORD_FIELD,  UserFormSelector::WP_LOGIN_PASSWORD);
        $I->click(UserFormSelector::WP_LOGIN_BUTTON);
    }
}
