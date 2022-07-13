<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\models\Tempatpkl;
use backend\models\Dosen;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use backend\models\Mahasiswa;
use backend\models\Angkatan;
/* @var $this yii\web\View */
/* @var $model backend\models\Pendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-form">
<div class="panel panel-info">
        <div class="panel-heading">
            <h4>
             <?= $this->title ?>
                <span class="pull-right">
                    <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
                </span>
            </h4>
        </div>
             <div class="panel-body">
            
   <?php $form = ActiveForm::begin(['layout' => 'horizontal',
                'options' => [
                    'class' => 'col-md-8'
                ]
            ]); ?>
	<?=
		$form->field($model, 'pd_bp')->dropDownList(ArrayHelper::map(Mahasiswa::find()->all(),'mhs_bp','mhs_nama'),
				['prompt'=>'Pilih Mahasiswa'])
	?>

	<?=
		$form->field($model, 'pd_instansi')->dropDownList( ArrayHelper::map(Tempatpkl::find()->all(),'p_id','p_nama'),
				['prompt'=>'Pilih Instansi/Perusahaan'])
	?> 
	<?=  $form-> field($model, 'pd_tgl_mulai')->widget(DatePicker::classname(), [
		'value' => date('d-M-Y'),
                    //'options' => ['placeholder' => 'Start date & time'],
                    'pluginOptions' => [
                        'autoclose' => true,
                    'format' => 'yyyy-mm-dd', 
                    		
                    ]
                ]);
    ?>  
	<?=  $form-> field($model, 'pd_tgl_selesai')->widget(DatePicker::classname(), [
		'value' => date('d-M-Y'),
                    //'options' => ['placeholder' => 'Start date & time'],
                    'pluginOptions' => [
                     'autoclose' => true,
                    'format' => 'yyyy-mm-dd',                  		
                    ]
                ]);
    ?>  
	
    <?= $form->field($model, 'pd_pbblap')->textInput(['maxlength' => true]) ?>
 	 <?= $form->field($model, 'tahun')->dropDownList( ArrayHelper::map(Angkatan::find()->all(),'id','tahun'))?>
    <div class="form-group" align="center">
        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div>
</div>
