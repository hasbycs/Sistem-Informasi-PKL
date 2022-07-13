<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Dosen;

/* @var $this yii\web\View */
/* @var $model backend\models\Angkatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="angkatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'kaprodi')->dropDownList(ArrayHelper::map(Dosen::find()->all(),'dsn_nip','dsn_nama'),
    		['promp'=>'pilih nama']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Simpan') : Yii::t('app', 'Simpan'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
