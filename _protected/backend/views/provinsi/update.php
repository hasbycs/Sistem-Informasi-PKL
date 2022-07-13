<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Provinsi */

$this->title = 'Update Provinsi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provinsi-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
