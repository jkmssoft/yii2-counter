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
 * Represents counter create page.
 *
 * @property \AcceptanceTester|\FunctionalTester $actor
 */
class CreatePage extends BasePage
{
    /**
     * @inheritdoc
     */
    public $route = '/counter/counter/create';


    /**
     * Create the counter by filling the form and submitting it.
     * @param string $name
     * @param integer $counter
     * @param integer $visible 0 or 1
     */
    public function create($name, $counter, $visible)
    {
        if ($name != null) {
            $this->actor->fillField('#counter-name', $name);
        }
        if ($counter != null) {
            $this->actor->fillField('#counter-counter', $counter);
        }

        if ($visible == 1) {
            $this->actor->checkOption('#counter-visible');
        }
//        elseif ($visible == 0) {
//            $this->actor->uncheckOption('#counter-visible');
//        }

        $this->actor->click('Create');
    }
}
