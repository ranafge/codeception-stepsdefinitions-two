Feature: UserFormMandatoryFieldValidation.feature
  As a user
  I want to be informed of required fields
  So that I can fill in all necessary information when submitting the form

Scenario: Display validation messages for missing required fields
 
  When I click the "Save Changes" button
  Then I should see
    | Full Name is a required field |
    | Address is a required field |
