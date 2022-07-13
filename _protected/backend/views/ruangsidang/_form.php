<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ruangsidang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruangsidang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noLokal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gedung')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
