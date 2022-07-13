<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Datapembimbing */

$this->title = 'Update Datapembimbing: ' . $model->mahasiswa;
$this->params['breadcrumbs'][] = ['label' => 'Datapembimbings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datapembimbing-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
