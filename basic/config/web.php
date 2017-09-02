<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'language' => 'ru',
    'bootstrap' => ['log'],
    'defaultRoute' => 'site/index',
    'components' => [
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceLanguage' => 'ru',
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '02n2Mx7eqTapmAhdEhE5ATU4Qa5Xlwme',
            'class' => 'app\modules\lang\components\LangRequest',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'amnah\yii2\user\components\User',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
            'messageConfig' => [
                'from' => ['bbssvv06@gmail.com' => 'Admin'], // this is needed for sending emails
                'charset' => 'UTF-8',
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'class' => 'app\modules\lang\components\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => '/',
            'rules' => [ // не забывать что порядок рулсов играет очень большую роль
                'cat-<catalias1:\w+>/<catalias2:\w+>/<catalias:\w+>/prod-<alias:\w+>-<id:\d+>' => 'product/index',
                'cat-<catalias1:\w+>/<catalias:\w+>/prod-<alias:\w+>-<id:\d+>' => 'product/index',
                'cat-<catalias:\w+>/prod-<alias:\w+>-<id:\d+>' => 'product/index',

                'cat-<alias1:\w+>/<alias2:\w+>/<alias:\w+>' => 'category/index',
                'cat-<alias1:\w+>/<alias:\w+>' => 'category/index',
                'cat-<alias:\w+>' => 'category/index',

                'page-<alias:\w+>-<id:\d+>' => 'page/default/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@vendor/amnah/yii2-user/views' => '@app/views/module-user',
                ],
            ],
        ],

    ],
    'modules' => [
        'user' => [
            'class' => 'amnah\yii2\user\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'page' => [
            'class' => 'app\modules\page\PageModule',
            'adminLayout' => '@app/modules/admin/views/layouts/main',
            'adminRoles' => ['@'],
            'controllerBehaviors' => [
                [ 'class' => 'app\modules\ceo\components\CeoBehavior'],
            ],
        ],
        'ceo' => [
            'class' => 'app\modules\ceo\CeoModule',
            'adminLayout' => '@app/modules/admin/views/layouts/main',
            'adminRoles' => ['@'],
            'urlParams' => ['lang', 'id', 'catalias1', 'catalias2', 'catalias', 'alias', 'alias1', 'controller', 'action'],
        ],
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
          // other module settings, refer detailed documentation
        ],
        'cart' => [
            'class' => 'app\modules\cart\Module',
        ],
        'callback' => [
            'class' => 'app\modules\callback\CallbackModule',
        ],
        'search' => [
            'class' => 'app\modules\search\SearchModule',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
} else {
    $config['components']['assetManager'] = [
        'bundles' =>require(__DIR__.'/../assets/MinAsset.php'),
    ];
}

return $config;
