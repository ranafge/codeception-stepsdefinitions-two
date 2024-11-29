<?php

declare(strict_types=1);

namespace Tests\Support\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Wp_login extends \Codeception\Module
{
    public function loginWpAdmin()
    {
        $I=$this->getModule(\Codeception\Actor);
        $I->amOnPage('/wp-login.php');
        codecept_debug($I->grabTextFrom('input#wp-submit'));
        $I->fillField('input#user_login', 'rana');
        $I->fillField('input#user_pass', 'Pass1234@');
        $I->click("input#wp-submit");
    }
}
