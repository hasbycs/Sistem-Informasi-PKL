<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = 'Update Mahasiswa: ' . $model->mhs_nama;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mhs_bp, 'url' => ['view', 'id' => $model->mhs_bp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa-update">

 <?= $this->render('_formadmin', [
        'model' => $model,
    ]) ?> 

   
</div>
