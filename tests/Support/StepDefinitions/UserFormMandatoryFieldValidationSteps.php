<?php

namespace Tests\Support\StepDefinitions;

use Tests\Support\Helper\UserFormSelector;
use Codeception\Attribute\Skip;
use Codeception\Scenario;

trait UserFormMandatoryFieldValidationSteps
{

   
    /**
     * @When I click the :arg1 button
     */
  
    public function iClickTheButton($arg1)
    {
        
        $this->amOnPage(UserFormSelector::WP_LOGIN_PAGE);
        $this->fillField(UserFormSelector::WP_USERNAME_FIELD, UserFormSelector::WP_LOGIN_USERNAME);
        $this->fillField(UserFormSelector::WP_LOGIN_PASSWORD_FIELD, UserFormSelector::WP_LOING_PASSWORD);
        $this->click(UserFormSelector::WP_LOGIN_BUTTON);
        $this->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
        $this->fillField(UserFormSelector::FULL_NAME_FIELD, "");
        $this->fillField(UserFormSelector::ADDRESS_FIELD, "");
        $this->click(UserFormSelector::SAVE_CHANGES_BUTTON); // Ensure this constant is correct
    }

    /**
     * @Then I should see
     */
    public function iShouldSee()
    {
        
        $this->see("Full Name is a required field");
        $this->see("Address is a required field");
    }
}
