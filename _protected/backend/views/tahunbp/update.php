<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tahunbp */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tahunbp',
]) . $model->angkatan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tahunbps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->angkatan, 'url' => ['view', 'id' => $model->angkatan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tahunbp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
