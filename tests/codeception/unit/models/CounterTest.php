<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\codeception\unit\models;

use Codeception\Specify;
use jkmssoft\counter\models\Counter;
use tests\codeception\fixtures\CounterFixture;
use tests\codeception\unit\TestCase;
use Yii;

/**
 * Test suite for Counter active record class.
 *
 * @author jkmssoft
 */
class CounterTest extends TestCase
{
    use Specify;

    /**
     * Test method "increase".
     */
    public function testIncrease()
    {
        $this->specify('counter should be increased', function () {
            $fixtureCounter = $this->getFixture('counter')->getModel('counter');
            $counter = new Counter();
            $newval = $counter->increase($fixtureCounter->name);
            verify($newval)->equals($fixtureCounter->counter+1);
        });

        $this->specify('counter should be created and set to 1', function () {
            $sCounterName = Yii::$app->security->generateRandomString(5).date('YmdHis');
            $counter = new Counter();
            $newval = $counter->increase($sCounterName);
            verify($newval)->equals(1);
        });
    }

    /**
     * Test method "decrease".
     */
    public function testDecrease()
    {
        $this->specify('counter should be decreased', function () {
            $fixtureCounter = $this->getFixture('counter')->getModel('decrease');
            $counter = new Counter();
            $newval = $counter->decrease($fixtureCounter->name);
            verify($newval)->equals($fixtureCounter->counter-1);
        });

        $this->specify('counter should be created and set to -1', function () {
            $sCounterName = Yii::$app->security->generateRandomString(5).date('YmdHis');
            $counter = new Counter();
            $newval = $counter->decrease($sCounterName);
            verify($newval)->equals(-1);
        });
    }

    /**
     * Test method "getCount".
     */
    public function testGetCount()
    {
        $this->specify('get counter value', function () {
            $fixtureCounter = $this->getFixture('counter')->getModel('counter');
            $counter = new Counter();
            $val = $counter->getCount($fixtureCounter->name);
            $this->assertGreaterThan(0, $val);
        });
    }

    /**
     * Test method "exists".
     */
    public function testExists()
    {
        $this->specify('counter exists', function () {
            $fixtureCounter = $this->getFixture('counter')->getModel('exists');
            $counter = new Counter();
            $this->assertTrue($counter->exists($fixtureCounter->name));
        });

        $this->specify('counter doesn\'t exists', function () {
            $sCounterName = Yii::$app->security->generateRandomString(5).date('YmdHis');
            $counter = new Counter();
            $this->assertFalse($counter->exists($sCounterName));
        });
    }
}
