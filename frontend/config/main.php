 <?php

     use \yii\web\Request;
     //$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

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
    'layout' => 'basic',
    'language' => 'ru',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
    	'urlManager' => [
            'enablePrettyUrl' => true, 
           //'showScriptName' => false,
            'rules' => [
               // 'znania' => 'knowledge/index',

            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',

            'enableCsrfValidation' => false,// Валидация входных параметров формы
         //  'baseUrl' =>'',
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


        'stringHelper' => [
            'class' => 'frontend\components\StringHelper',
        ],


        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'streamOptions' => [
                    'ssl' => [
                        'allow_self_signed' => true,
                        'verify_peer' => false,
                         'verify_peer_name' => false, ],
                          ],
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'dmitrijbuckov57@gmail.com',
                'password' => 'D12fuhr7kop',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],






    ],
    'params' => $params,
];
