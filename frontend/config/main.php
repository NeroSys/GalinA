<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'timeZone' => 'Europe/Kiev', //для правильного форматирования времени
    'modules' => [
        'i18n' => Zelenin\yii\modules\I18n\Module::className(),
        'translations' => [
            'yii' => [
                'class' => yii\i18n\DbMessageSource::className()
            ]
        ],
        'rbac' => [
            'class' => 'common\modules\rbac\RBAC',
        ],
        'permit' => [
            'class' => 'common\modules\rbac\RBAC',
            'params' => [
                'userClass' => 'common\models\User',
                'accessRoles' => ['admin'],
            ]
        ],

    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
            'class' => 'frontend\components\LangRequest'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'frontend\components\LangUrlManager',
            'rules'=>[

                'category/<slug>' => 'category/view',
                'product/<slug>' => 'product/view',
                'search' => 'site/search',
                '/' => 'site/index',
                '<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
            ]
        ],

        'language'=>'ru',
        'i18n' => [
            'class' => Zelenin\yii\modules\I18n\components\I18N::className(),
            'languages' => ['ru', 'uk', 'en','bg'],
            'translations' => [
                'yii' => [
                    'class' => yii\i18n\DbMessageSource::className()
                ]
            ]
        ],
    ],


    'params' => $params,
];
