<?php
use yii\helpers\Html;
use backend\assets\AppAsset;
/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">'.Html::img(AppAsset::register($this)->baseUrl.'/images/logo-poli.png',['style'=>'width:25px;margin-top:0px;']).'AB</span><span class="logo-lg">' . Html::img(AppAsset::register($this)->baseUrl.'/images/logo-poli.png',['style'=>'width:25px;margin-top:-4px;margin-right:5px;border-radius:3px;']).Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
			
                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/avatar5.png" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">Akun</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle"
                                 alt="User Image"/>

                            <p>
                          <?=
 								 @Yii::$app->user->identity->username 
                          ?>
                                <small><?php echo date('Y')?></small>
                            </p>
                        <?php $id=Yii::$app->user->identity->id?>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                            <?= Html::a(
                                    'Profile',
                            		['/user/'],
                                    ['data-method' => 'post', 'class' => 'btn btn-warning btn-flat']
                                ) ?>
                                
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-danger btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                
            </ul>
        </div>
    </nav>
</header>
