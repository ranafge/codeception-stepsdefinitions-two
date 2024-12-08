<?php


namespace Tests\Acceptance;
use Tests\Support\Helper\UserFormSelector;
use Tests\Support\AcceptanceTester;
use Tests\Support\Helper;
use Codeception\Attribute\Group;


class UserFormCest
{
    public function _before(AcceptanceTester $I) {}

    // tests
    public function tryToTest(AcceptanceTester $I) {}


    #[Group("admin")]
    #[Group("editor")]
    public function example(AcceptanceTester $I) {
        $I->amOnPage(UserFormSelector::WP_LOGIN_PAGE);
        $I->fillField(UserFormSelector::WP_USERNAME_FIELD, UserFormSelector::WP_LOGIN_USERNAME);
        $I->fillField(UserFormSelector::WP_LOGIN_PASSWORD_FIELD,  UserFormSelector::WP_LOGIN_PASSWORD);
        $I->click(UserFormSelector::WP_LOGIN_BUTTON);
    }
}
