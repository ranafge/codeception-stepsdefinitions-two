Feature: User form submission
  In order to fill in the form data
  As a user
  I want to be able to fill the user form

Scenario: Fill the user data
  Given I am on the user form page
  And I have a full name field to fill in
  And I have a nick name field to fill in
  And I have an address field to fill in
  And I have a date of birth day field to fill in
  And I have a date of birth month field to fill in
  And I have a date of birth year field to fill in
  And I have an email address field to fill in
  And I have a website field to fill in
  When I click on save change button field
  Then I see the Settings saved. message
