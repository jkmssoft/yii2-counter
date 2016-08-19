<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use tests\codeception\_pages\ListPage;
use tests\codeception\fixtures\CounterFixture;

// login as admin
require 'LoginCept.php';

# List
$I = new FunctionalTester($scenario);
$I->wantTo('ensure that counter list works');

$I->amGoingTo('view the counter index (list)');
    $counter = $I->getFixture('counter')->getModel('counter');
    $page = ListPage::openBy($I);
    // check content in columns:
    $I->see($counter->name, '//tr["data-key='.$counter->id.'"]/td[3]');
    $I->see($counter->id, '//tr["data-key='.$counter->id.'"]/td[2]');
    $I->see($counter->counter, '//tr["data-key='.$counter->id.'"]/td[4]');
    $I->see($counter->visible==CounterFixture::INVISIBLE?'No':'Yes', '//tr["data-key='.$counter->id.'"]/td[5]');
