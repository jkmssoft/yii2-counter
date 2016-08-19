<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use tests\codeception\_pages\ViewPage;

// login as admin
require 'LoginCept.php';

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that counter view works');

$I->amGoingTo('view a invisible counter');
    $counter = $I->getFixture('counter')->getModel('invisible_counter');
    $page = ViewPage::openBy($I, ['id' => $counter->id]);
    $I->see($counter->name, 'h1');
    $I->see('No', 'td');

$I->amGoingTo('view a visible counter');
    $counter = $I->getFixture('counter')->getModel('visible_counter');
    $page = ViewPage::openBy($I, ['id' => $counter->id]);
    $I->see($counter->name, 'h1');
    $I->see('Yes', 'td');

$I->amGoingTo('view a negative counter');
    $counter = $I->getFixture('counter')->getModel('negative_counter');
    $page = ViewPage::openBy($I, ['id' => $counter->id]);
    $I->see($counter->name, 'h1');
    $I->see($counter->counter, 'td');
