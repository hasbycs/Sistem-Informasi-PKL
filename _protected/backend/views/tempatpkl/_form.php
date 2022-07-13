<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\widgets\ActiveForm;
use backend\models\Provinsi;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Tempatpkl */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="tempatpkl-form panel panel-info">

        <div class="panel-heading">
            <h4>
                <?= 'Masukkan Data sesuai fakta ! '?>
                <span class="pull-right">
                    <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
                </span>
            </h4>
        </div>

        <div class="panel-body">

            <?php $form = ActiveForm::begin([
                'options' => [
                    'class' => 'col-md-8'
                ]
            ]); ?>
   <div class="col-xs-12 col-lg-12 no-padding">
   <div class="col-sm-6">
    <?= $form->field($model, 'p_nama')->textInput(['maxlength' => true]) ?>

	<?=
		$form->field($model, 'p_provinsi')->dropDownList( ArrayHelper::map(Provinsi::find()->all(),'id','nama_provinsi'),
				['prompt'=>'Pilih Provinsi'])
	?>

    <?= $form->field($model, 'p_alamat')->textarea(['rows' => 6]) ?>
</div>
 <div class="col-sm-6">
    <?= $form->field($model, 'p_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_notelp')->textInput(['maxlength' => true]) ?>
</div>
  </div>
 <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
    <div class="col-xs-6">
        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>
	
        </div>
		</div>