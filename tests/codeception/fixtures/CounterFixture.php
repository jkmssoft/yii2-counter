<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\codeception\fixtures;

use yii\test\ActiveFixture;

/**
 * Provides fixtures for counter tests.
 */
class CounterFixture extends ActiveFixture
{
    /**
     * @inheritdoc
     */
    public $modelClass = 'jkmssoft\counter\models\Counter';
    /**
     * @var Constant defining the value of a the visible attribute if counter is marked as visible.
     */
    const VISIBLE = 1;
    /**
     * @var Constant defining the value of a the visible attribute if counter is marked as invisible.
     */
    const INVISIBLE = 0;
}
