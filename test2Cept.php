<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Оформление предварительной заявки');
$I->amOnPage('/');
$I->fillField('term', 'кросстекс');
$I->click('Найти');
$I->see('Оформление предварительной заявки');