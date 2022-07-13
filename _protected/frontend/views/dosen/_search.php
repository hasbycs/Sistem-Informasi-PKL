<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DosenSearch */
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

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
