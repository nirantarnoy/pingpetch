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
    'controllerNamespace' => 'frontend\controllers',
    'aliases'=>[
        '@alstar' => '@frontend/themes/alstar',
    ],
    'components' => [

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@frontend/views' => '@alstar/views'
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
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
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
//        'mailer' => [
//            'class' => 'yii\swiftmailer\Mailer',
//            'viewPath' => '@frontend/mail',
//            'useFileTransport' => false,
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.sendgrid.net',
//       //         'host' => 'gmail-smtp-msa.l.google.com',
////                'username' => 'panumas894@gmail.com',
////                'password' => 'panumas4971596',
//                'username' => 'nirantarnoy@gmail.com',
//                'password' => 'somsri15',
//       //         'username' => 'apikey',
//     //           'password' => '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
////',
//                'port' => '465',
//                'encryption' => 'ssl',
//            //    'port' => '587',
//            //    'encryption' => 'TLS',
//                //'port' => '25',
//               // 'encryption' => 'TLS',
//            ],
//
//        ],
    ],
    'params' => $params,
];
