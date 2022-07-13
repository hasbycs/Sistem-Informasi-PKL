<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ruangsidang */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ruangsidang',
]) . $model->noLokal;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ruangsidangs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->noLokal]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ruangsidang-update">
   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
