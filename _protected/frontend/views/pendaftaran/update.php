<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pendaftaran */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Data',
]) . $model->pd_bp;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pendaftaran'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pd_id, 'url' => ['view', 'id' => $model->pd_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    		//'bp'=>$bp,
    ]) ?>

</div>
