<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
		'language'=>'id',
		'name'=>'',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
