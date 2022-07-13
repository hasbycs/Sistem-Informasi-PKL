<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Laporanpkl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporanpkl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bp')->textInput(['value' => $bepe,'readOnly'=>true]) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Simpan') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'fa fa-save btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
