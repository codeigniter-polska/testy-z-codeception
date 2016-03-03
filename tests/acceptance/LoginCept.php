<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('log in'); // określamy co chcemy zrobić
$I->amOnPage('/login'); // określamy na jakiej stronie chcemy się znaleźć
$I->seeInTitle('Logowanie'); // sprawdzamy jak jest tytuł strony
$I->fillField('username', 'ren'); // wypelniamy pole username
$I->fillField('password', 'secret'); // wypełniamy pole password
$I->click('Zaloguj'); // klikamy Zaloguj
$I->see('Witaj ren!'); // sprawdzamy, czy widzimy tekst powitalny