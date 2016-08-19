<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\codeception\unit;

use tests\codeception\fixtures\CounterFixture;

/**
 * TestCase class with fixtures.
 */
class TestCase extends \yii\codeception\TestCase
{
    /**
     * @inheritdoc
     */
    public $appConfig = '@tests/codeception/config/unit.php';

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();
        // see https://github.com/Codeception/Specify/issues/25
        \Codeception\Specify\Config::setDeepClone(false);
        $this->loadFixtures();
    }
    
    /**
     * @inheritdoc
     */
    public function fixtures()
    {
        return [
            'counter' => [
                'class'    => CounterFixture::className(),
                'dataFile' => '@tests/codeception/fixtures/data/init_counter.php',
            ],
        ];
    }
}
