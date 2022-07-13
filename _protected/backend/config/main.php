<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
	'name'=>'Sistem Informasi PKL AB',
    'basePath' => dirname(__DIR__),
	'language' => 'id',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
		//'homeUrl' => '/sipkl/admin',
		'modules' => 	[
				'gridview' =>  [
						'class' => '\kartik\grid\Module'
						// enter optional module parameters below - only if you need to
						// use your own export download action or custom translation
						// message source
						// 'downloadAction' => 'gridview/export/download',
						// 'i18n' => []
		],
				/*'admin' => [
							'class' => 'mdm\admin\Module',
							'layout' => 'left-menu',
							'controllerMap' => [
												'assignment' => [
												'class' => 'mdm\admin\controllers\AssignmentController',
												'userClassName' => 'common\models\User',
												'idField' => 'id'
																]
												],
							]*/
							
						],

				'components' => [
    			//'authManager' => ['class' => 'yii\rbac\PhpManager',],
    			'request' => [		
      			  					//'BaseUrl' => '/sipkl/admin',
           							 'csrfParam' => '_csrf-backend',
      						  ],
        		'user' => [
            			'identityClass' => 'common\models\User',
            			'enableAutoLogin' => true,
           				 'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
       				 		],
        		'session' => [
            						// this is the name of the session cookie used for login on the backend
            					'name' => 'advanced-backend',
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
    		
				//'as access' => ['class' => 'mdm\admin\components\AccessControl','allowActions' => [
				//					'site/*', // tambahkan action-action yg lain di sini
				//			],],
       			 'errorHandler' => [
            					'errorAction' => 'site/error',
       							 ],
        
        		'urlManager' => [
           		'enablePrettyUrl' => true,
           		'showScriptName' => false,
            	'rules' => [],
       						 ],
   			   ],
    			'params' => $params,
			];



