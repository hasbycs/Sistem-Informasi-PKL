<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mhs_id') ?>

    <?= $form->field($model, 'mhs_bp') ?>

    <?= $form->field($model, 'mhs_nama') ?>

    <?= $form->field($model, 'mhs_tempat_lahir') ?>

    <?= $form->field($model, 'mhs_tgl_lahir') ?>

    <?php // echo $form->field($model, 'mhs_prodi') ?>

    <?php // echo $form->field($model, 'mhs_jurusan') ?>

    <?php // echo $form->field($model, 'mhs_email') ?>

    <?php // echo $form->field($model, 'mhs_notelp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
