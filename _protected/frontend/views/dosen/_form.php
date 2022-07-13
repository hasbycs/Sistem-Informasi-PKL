<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dsn_nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dsn_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dsn_notelp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dsn_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
