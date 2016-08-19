<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

defined('JKMSSOFT_COUNTER_BASE_PATH') or define('JKMSSOFT_COUNTER_BASE_PATH', dirname(dirname(dirname(__DIR__))));

require(JKMSSOFT_COUNTER_BASE_PATH.'/vendor/autoload.php');
require(JKMSSOFT_COUNTER_BASE_PATH.'/vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@tests', dirname(dirname(__DIR__)));
