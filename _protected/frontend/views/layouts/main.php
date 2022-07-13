<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */
if (class_exists('backend\assets\AppAsset')) {
    backend\assets\AppAsset::register($this);
} else {
    frontend\assets\AppAsset::register($this);
}

dmstr\web\AdminLteAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode(Yii::$app->name.' - '.$this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue-light layout-top-nav">
        <?php $this->beginBody() ?>
        <div class="wrapper">

            <?php 
            echo $this->render(
                    'header.php', ['directoryAsset' => $directoryAsset]
            );
            ?>

            <?php
            echo $this->render(
                    'content.php', ['content' => $content, 'directoryAsset' => $directoryAsset]
            )
            
            ?>
<!--            <div class="content-wrapper">
                <div class="container">
                    <section class="content">
                    <?php
//                    echo Breadcrumbs::widget([
//                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//                    ])
                    ?>
                    <?php // echo $content ?>
                    </section>
                </div>
            </div>-->

        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
