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
 * Application configuration shared by all test types
 */
return [
    'id' => 'yii2-counter-test',
    'basePath' => dirname(dirname(__DIR__)),
    'vendorPath' => dirname(dirname(dirname(__DIR__))).'/vendor',
    'language' => 'en-US',
    'aliases' => [
        '@jkmssoft/counter' => dirname(dirname(dirname(__DIR__))),
    ],
    'modules' => [
        'counter' => [
            'class' => 'jkmssoft\counter\Module',
        ]
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'tests\codeception\fixtures',
        ],
    ],
    'components' => [
        'counter' => [
            'class' => 'jkmssoft\counter\components\Counter',
        ],
        'db' => require(__DIR__.'/db.php'),
        'mailer' => [
            'useFileTransport' => true,
        ],
        /*'urlManager' => [
            'showScriptName' => true,
        ],*/
        /*'authManager' => [
            'class' => 'yii\rbac\DbManager'
        ],*/
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'i18n' => [
            'translations' => [
                'counter' => [
                    'class'    => \yii\i18n\PhpMessageSource::className(),
                    'basePath' => '@jkmssoft/counter/messages',
                    'sourceLanguage' => 'en-US'
                ],
            ],
        ],
    ],
];
