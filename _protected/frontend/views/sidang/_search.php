<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SidangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sidang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 's_id') ?>

    <?= $form->field($model, 's_bp') ?>

    <?= $form->field($model, 's_tgl_sidang') ?>

    <?= $form->field($model, 's_ruang') ?>

    <?= $form->field($model, 's_jam') ?>

    <?php // echo $form->field($model, 's_pembimbing') ?>

    <?php // echo $form->field($model, 's_penguji') ?>

    <?php // echo $form->field($model, 's_tempat_pkl') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
