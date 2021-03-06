<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TempatpklSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tempatpkl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'p_id') ?>

    <?= $form->field($model, 'p_nama') ?>

    <?= $form->field($model, 'p_provinsi') ?>

    <?= $form->field($model, 'p_alamat') ?>

    <?= $form->field($model, 'p_email') ?>

    <?php // echo $form->field($model, 'p_notelp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
