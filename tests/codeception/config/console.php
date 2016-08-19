<?php

/*
 * This file is part of the yii2-counter project.
 *
 * (c) jkmssoft <http://github.com/jkmssoft/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Application configuration for console
 */
return [
    'id' => 'yii2-counter-test-console',
    'basePath' => dirname(__DIR__),
    'controllerMap' => [
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => __DIR__.'/../../../migrations',
        ],
    ],
    'components' => [
    ]
];
