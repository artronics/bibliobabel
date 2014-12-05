<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('log in as regular user');
$I->amOnPage('/');
$I->fillField('email','hg@hg.hg');
$I->fillField('password','q');
$I->click('Login');
//$I->see('Hello, davert');
