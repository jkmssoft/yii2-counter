<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
$db = [
    'dsn' => 'mysql:host=127.0.0.1;dbname=jkmssoft_yii2-counter_test',
    'username' => 'root',
    'password' => '',
];

if (file_exists(__DIR__.'/db-local.php')) {
    $db = array_merge($db, require(__DIR__.'/db-local.php'));
}

return array_merge(['class' => 'yii\db\Connection'], $db);
