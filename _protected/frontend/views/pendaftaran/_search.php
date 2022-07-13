<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PendaftaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pd_id') ?>

    <?= $form->field($model, 'pd_bp') ?>

    <?= $form->field($model, 'pd_nama') ?>

   
    <?= $form->field($model, 'pd_instansi') ?>

    <?php // echo $form->field($model, 'pd_tgl_mulai') ?>

    <?php // echo $form->field($model, 'pd_tgl_selesai') ?>

    <?php // echo $form->field($model, 'pd_dosen') ?>

    <?php // echo $form->field($model, 'pd_pbblap') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
