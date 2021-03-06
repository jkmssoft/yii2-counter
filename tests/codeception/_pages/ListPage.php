<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\codeception\_pages;

use yii\codeception\BasePage;

/**
 * Represents counter index (=list) page.
 *
 * @property \AcceptanceTester|\FunctionalTester $actor
 */
class ListPage extends BasePage
{
    /**
     * @inheritdoc
     */
    public $route = '/counter/counter/index';
}
