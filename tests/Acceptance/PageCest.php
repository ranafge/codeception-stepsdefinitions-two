<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Codeception\Attribute\DataProvider;
use Codeception\Example;

class PageCest
{

  
    //Link the test method to the data provider
    #[DataProvider("pageProvider")]
    public function staticPagesTest(\Tests\Support\AcceptanceTester $I, Example $example)
    {
        // Navigate to the URL provided by the data set
        $I->amOnPage($example['url']);
        // Varify the ttile in the header 
        $I->seeInTitle($example['title']);
    }

    // The data provider method supplying test cases
    protected function pageProvider(): array
    {
        return [

            ['url' => '/wp-admin/options-general.php?page=qa-test-settings', 'title' => 'Log In ‹ My blog — WordPress'],
            ['url' => '/wp-admin/options-general.php?page=qa-test-settings', 'title' => 'Log In ‹ My blog — WordPress']
        ];
    }

    // tests
    public function tryToTest(AcceptanceTester $I) {}
}
