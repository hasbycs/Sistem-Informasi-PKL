<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Ruangsidang */

$this->title = Yii::t('app', 'Tambah Ruang sidang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ruangsidang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruangsidang-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
