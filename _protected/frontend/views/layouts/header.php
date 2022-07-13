<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<header class="main-header">

    <?php // echo Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <?php
    NavBar::begin([
        'brandLabel' => Html::img(AppAsset::register($this)->baseUrl . '/images/logo-poli.png', 
        	['style' => 'width:34px;margin-top:-10px;float:left;margin-right:5px;border-radius:0px;']) . 'Administrasi Bisnis PNP',
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions' => [
            'style' => 'font-size:20px;'
        ],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    
    if( !Yii::$app->user->isGuest){
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],     	
        	['label' => 'Data Diri', 'url' => ['/mahasiswa/viewm/'],'visible' => Yii::$app->user->identity->role==2],
        	['label' => 'Data Diri', 'url' => ['/dosen/view/'],'visible' => Yii::$app->user->identity->role==3],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                    ['label' => 'Login', 'url' => ['/site/login']] :
                    [
                'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
                    ],
        ],
    ]);
    }else{
    	echo Nav::widget([
    			'options' => ['class' => 'navbar-nav navbar-right'],
    			'items' => [
    					['label' => 'Home', 'url' => ['/site/index']],
    					
    					['label' => 'About', 'url' => ['/site/about']],
    					
    					//            ['label' => 'Contact', 'url' => ['/site/contact']],
    					['label' => 'Daftar', 'url' => ['site/signup'],'visible'=>Yii::$app->user->isGuest], 					
    					['label' => 'Login', 'url' => ['/site/login'],'visible'=>Yii::$app->user->isGuest]
    					
    				
    			],
    	]);
    }
    NavBar::end();
    ?>
</header>
