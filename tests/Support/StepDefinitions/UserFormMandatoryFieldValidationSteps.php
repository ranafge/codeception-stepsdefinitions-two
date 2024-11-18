<?php

namespace Tests\Support\StepDefinitions;

use Tests\Support\Helper\UserFormSelector;

trait UserFormMandatoryFieldValidationSteps {

  /**
 * @Given I am on the User Form page
 */
public function iAmOnTheUserFormPage()
{
    $this->amOnPage('/wp-admin/options-general.php?page=qa-test-settings');
}

 

   /**
    * @When I leave all required fields empty
    */
    public function iLeaveAllRequiredFieldsEmpty()
    {
        $this->fillField('#qa_test_fullname', '');
    }

   /**
    * @When I click the :arg1 button
    */
    public function iClickTheButton($arg1)
    {
       $this->click(UserFormSelector::SAVE_CHANGES_BUTTON);
    }

   /**
    * @Then I should see :arg1
    */
    public function iShouldSee($arg1)
    {
        $this->see("Full name is required field.");
    }
}
