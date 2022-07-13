<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tempatpkl */

$this->title = 'Update Tempatpkl: ' . $model->p_nama;
$this->params['breadcrumbs'][] = ['label' => 'Tempatpkls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p_id, 'url' => ['view', 'id' => $model->p_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tempatpkl-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
