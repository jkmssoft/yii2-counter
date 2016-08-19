<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use tests\codeception\_pages\CreatePage;
use tests\codeception\fixtures\CounterFixture;

// login as admin
require 'LoginCept.php';

# Create
$I = new FunctionalTester($scenario);
$I->wantTo('ensure that counter creation works');

$I->amGoingTo('try to create new counter (random name)');
    $page = CreatePage::openBy($I);
    $name = Yii::$app->getSecurity()->generateRandomString(10);
    $page->create($name, 50, CounterFixture::VISIBLE);
    $I->expectTo('see name (in view)');
    $I->see($name, 'h1');

$I->amGoingTo('try to use existing name');
    $page = CreatePage::openBy($I);
    $counter = $I->getFixture('counter')->getModel('counter');
    $page->create($counter->name, $counter->counter, $counter->visible);
    $I->expectTo('see validations errors');
    $I->see('Name "'.$counter->name.'" has already been taken.', 'div');

$I->amGoingTo('try to create counter with empty fields');
    $page->create('', '', CounterFixture::INVISIBLE);
    $I->expectTo('see name validations errors');
    $I->see('Name cannot be blank.');

$I->amGoingTo('try to create counter with invalid counter value');
    $name = Yii::$app->getSecurity()->generateRandomString(10);
    $page->create($name, 'INVALID_VALUE', CounterFixture::INVISIBLE);
    $I->expectTo('see counter validations errors');
    $I->see('Counter must be an integer.');
