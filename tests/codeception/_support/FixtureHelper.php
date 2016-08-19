<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\codeception\_support;

use Codeception\Module;
use Codeception\TestCase;
use tests\codeception\fixtures\CounterFixture;
use yii\test\FixtureTrait;

/**
 * Handles the fixtures.
 */
class FixtureHelper extends Module
{
    use FixtureTrait;

    /**
     * @var array
     */
    public static $excludeActions = [
        'loadFixtures',
        'unloadFixtures',
        'getFixtures',
        'globalFixtures',
        'fixtures'
    ];

    /**
     * @param TestCase $testcase
     */
    public function _before(TestCase $testcase)
    {
        $this->unloadFixtures();
        $this->loadFixtures();
        parent::_before($testcase);
    }

    /**
     * @param TestCase $testcase
     */
    public function _after(TestCase $testcase)
    {
        $this->unloadFixtures();
        parent::_after($testcase);
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
