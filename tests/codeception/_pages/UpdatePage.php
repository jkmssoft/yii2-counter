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
 * Represents counter update page.
 *
 * @property \AcceptanceTester|\FunctionalTester $actor
 */
class UpdatePage extends BasePage
{
    /**
     * @inheritdoc
     */
    public $route = '/counter/counter/update';


    /**
     * Update the item by filling the form and submitting it.
     * @param string $name
     * @param integer $counter
     * @param integer $visible 0 or 1
     */
    public function update($name = null, $counter = null, $visible = 0)
    {
        if ($name != null) {
            $this->actor->fillField('#counter-name', $name);
        }
        if ($counter != null) {
            $this->actor->fillField('#counter-counter', $counter);
        }
        
        if ($visible == 1) {
            $this->actor->checkOption('#counter-visible');
        } else {
            $this->actor->uncheckOption('#counter-visible');
        }

        $this->actor->click('Update');
    }
}
