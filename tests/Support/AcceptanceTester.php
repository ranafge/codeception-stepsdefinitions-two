<?php

declare(strict_types=1);


namespace Tests\Support;

use Tests\Support\Helper\UserFormSelector;
use Codeception\Actor;

use SebastianBergmann\CodeCoverage\Driver\Selector;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
 */


 use Tests\Support\StepDefinitions\UserFormMandatoryFieldValidationSteps;
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    use UserFormMandatoryFieldValidationSteps;



    /**
     * @Given I am on the user form page
     */
    public function iAmOnTheUserFormPage()
    {
        $this->amOnPage(UserFormSelector::WP_LOGIN_PAGE);
        $this->fillField(UserFormSelector::WP_USERNAME_FIELD, UserFormSelector::WP_LOGIN_USERNAME);
        $this->fillField(UserFormSelector::WP_LOGIN_PASSWORD_FIELD, UserFormSelector::WP_LOING_PASSWORD);
        $this->click(UserFormSelector::WP_LOGIN_BUTTON);
        $this->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
    }

    /**
     * @Given I have a full name field to fill in
     */
    public function iHaveAFullNameFieldToFillIn()
    {
        $this->fillField(UserFormSelector::FULL_NAME_FIELD, UserFormSelector::FULL_NAME);
    }

    /**
     * @Given I have a nick name field to fill in
     */
    public function iHaveANickNameFieldToFillIn()
    {
        $this->fillField(UserFormSelector::NICK_NAME_FIELD, UserFormSelector::NICK_NAME);
    }

    /**
     * @Given I have an address field to fill in
     */
    public function iHaveAnAddressFieldToFillIn()
    {
        $this->fillField(UserFormSelector::ADDRESS_FIELD, UserFormSelector::ADDRESS);
    }

    /**
     * @Given I have a date of birth day field to fill in
     */
    public function iHaveADateOfBirthDayFieldToFillIn()
    {
        $this->fillField(UserFormSelector::BIRTH_DATE_FIELD, UserFormSelector::BIRTH_DATE);
    }

    /**
     * @Given I have a date of birth month field to fill in
     */
    public function iHaveADateOfBirthMonthFieldToFillIn()
    {
        $this->selectOption(UserFormSelector::BIRTH_MONTH_FIELD, UserFormSelector::BIRTH_MONTH);
    }

    /**
     * @Given I have a date of birth year field to fill in
     */
    public function iHaveADateOfBirthYearFieldToFillIn()
    {
        $this->fillField(UserFormSelector::BIRTH_YEAR_FIELD, UserFormSelector::BIRTH_YEAR);
    }

    /**
     * @Given I have an email address field to fill in
     */
    public function iHaveAnEmailAddressFieldToFillIn()
    {
        $this->fillField(UserFormSelector::EMAIL_FIELD, UserFormSelector::EMAIL);
    }

    /**
     * @Given I have a website field to fill in
     */
    public function iHaveAWebsiteFieldToFillIn()
    {
        $this->fillField(UserFormSelector::WEBSITE_FIELD, UserFormSelector::WEBSITE);
    }

    /**
     * @When I click on save change button field
     */
    public function iClickOnSaveChangeButtonField()
    {
        $this->click(UserFormSelector::SAVE_CHANGES_BUTTON);
    }

    /**
     * @Then I see the Settings saved:num1 message
     */
    public function iSeeTheSettingsSavedMessage($num1)
    {
        $this->see($num1);
    }
}
