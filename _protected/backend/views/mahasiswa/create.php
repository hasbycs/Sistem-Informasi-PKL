<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = 'Tambah Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">

   <?php //  <h1> Html::encode($this->title)</h1> ?>

 <?= $this->render('_formadmin', [
        'model' => $model,
    ]) ?>

</div>
