<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\helpers\Url;
use kartik\form\ActiveForm;
use kartik\builder\Form;
//use yii\widgets\ActiveForm;
//use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="dosen-form ">

    <?php
   
    $form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]);
    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 2,
        'attributes' => [
        	'dsn_nidn' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'NIDN','maxLength'=>true]],
            'dsn_nip' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'NIP','maxLength'=>true]],        	
        	'dsn_nama' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nama Lengkap']],
        	'dsn_notelp' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'No Telp/HP']],
        	'dsn_email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Email ']],
            
        ]
    ]);
    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'actions' => [
                'type' => Form::INPUT_RAW,
                'value' => '<div style="text-align: left; margin-top: 0px">' .
                Html::resetButton(' Batal', ['class' => 'fa fa-ban btn btn-default', 'onclick' => 'js:document.location="' . Url::to(['/dosen/index']) . '";']) . ' ' .
                Html::submitButton(' Simpan', ['type' => 'button', 'class' => 'fa fa-save btn btn-primary']) .
                '</div>'
            ],
        ]
    ]);

    ActiveForm::end();
    ?>
</div>

