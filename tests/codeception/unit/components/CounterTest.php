<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\codeception\unit\components;

use Codeception\Specify;
use jkmssoft\counter\components\Counter;
use tests\codeception\fixtures\CounterFixture;
use tests\codeception\unit\TestCase;
use Yii;

/**
 * Test suite for Counter Component class.
 *
 * @author jkmssoft
 */
class CounterTest extends TestCase
{
    use Specify;

    /**
     * Test method increase.
     */
    public function testIncrease()
    {
        $this->specify('counter should be increased', function () {
            $counter = $this->getFixture('counter')->getModel('counter');
            $newval = \Yii::$app->counter->increase($counter->name);
            verify($newval)->equals($counter->counter+1);
        });

        $this->specify('counter should be created and set to 1', function () {
            $sCounterName = Yii::$app->security->generateRandomString(5).date('YmdHis');
            $newval = \Yii::$app->counter->increase($sCounterName);
            verify($newval)->equals(1);
        });
    }

    /**
     * Test method decrease.
     */
    public function testDecrease()
    {
        $this->specify('counter should be decreased', function () {
            $counter = $this->getFixture('counter')->getModel('decrease');
            $newval = \Yii::$app->counter->decrease($counter->name);
            verify($newval)->equals($counter->counter-1);
        });

        $this->specify('counter should be created and set to -1', function () {
            $sCounterName = Yii::$app->security->generateRandomString(5).date('YmdHis');
            $newval = \Yii::$app->counter->decrease($sCounterName);
            verify($newval)->equals(-1);
        });
    }

    /**
     * Test method getCount.
     */
    public function testGetCount()
    {
        $this->specify('get counter value', function () {
            $counter = $this->getFixture('counter')->getModel('counter');
            $val = \Yii::$app->counter->getCount($counter->name);
            $this->assertGreaterThan(0, $val);
        });
    }

    /**
     * Test method exists.
     */
    public function testExists()
    {
        $this->specify('counter exists', function () {
            $counter = $this->getFixture('counter')->getModel('exists');
            $this->assertTrue(\Yii::$app->counter->exists($counter->name));
        });

        $this->specify('counter doesn\'t exists', function () {
            $sCounterName = Yii::$app->security->generateRandomString(5).date('YmdHis');
            $this->assertFalse(\Yii::$app->counter->exists($sCounterName));
        });
    }
}
