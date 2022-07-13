<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DosenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

  

    <?= $form->field($model, 'dsn_nip') ?>

    <?= $form->field($model, 'dsn_nama') ?>

    <?= $form->field($model, 'dsn_notelp') ?>

    <?= $form->field($model, 'dsn_email') ?>
     <?= $form->field($model, 'dsn_nidn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
