<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mahasiswa',
]) . $model->mhs_bp;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mhs_bp, 'url' => ['view', 'id' => $model->mhs_bp]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mahasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
