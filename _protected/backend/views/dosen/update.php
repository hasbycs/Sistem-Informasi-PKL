<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dosen */

$this->title = 'Update Dosen: ' . $model->dsn_nama;
$this->params['breadcrumbs'][] = ['label' => 'Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dsn_nidn, 'url' => ['view', 'id' => $model->dsn_nidn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dosen-update">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
