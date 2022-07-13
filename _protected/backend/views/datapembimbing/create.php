<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Datapembimbing */


$this->params['breadcrumbs'][] = ['label' => 'Data Pembimbing', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title = 'Tambah Data';
?>
<div class="datapembimbing-create ">

        <h4>
       Pilih mahasiswa
        </h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
