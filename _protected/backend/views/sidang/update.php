<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sidang */

$this->title = 'Update Sidang: ' . $model->s_bp;
$this->params['breadcrumbs'][] = ['label' => 'Sidangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->s_id, 'url' => ['view', 'id' => $model->s_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sidang-update">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
