<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
		'modules' => [
				'gridview' =>  [
						'class' => '\kartik\grid\Module',
						// enter optional module parameters below - only if you need to
						// use your own export download action or custom translation
						// message source
						 'downloadAction' => 'gridview/export/download',
						// 'i18n' => []
				]
		],
	//'homeUrl'=> '/sipkl',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
        		//'baseUrl'=>'/sipkl',
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    	'urlManagerBackend'=>[
    		'enablePrettyUrl' => true,
    		'class' => 'yii\web\UrlManager',
    			'scriptUrl' => '/backend',
    			'baseUrl' => 'http://localhost/backend',
    			
    	],
    		
        
    ],
    'params' => $params,
];
