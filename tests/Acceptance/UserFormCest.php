<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Tests\Support\Helper;


class UserFormCest
{   
    public function _before(AcceptanceTester $I)
    {
        
        $I->loginWpAdmin();
    
        
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
