<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kelas */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Kelas',
]) . $model->kls;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kelas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kls, 'url' => ['view', 'id' => $model->kls]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
