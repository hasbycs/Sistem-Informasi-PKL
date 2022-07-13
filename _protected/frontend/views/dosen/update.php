<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dosen */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Data',
]) . $model->dsn_nama;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dosens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dsn_nidn, 'url' => ['view', 'id' => $model->dsn_nidn]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dosen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
