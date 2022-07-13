<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;

use yii\bootstrap\ActiveForm;
use frontend\models\Tempatpkl;
use frontend\models\Dosen;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use frontend\models\Pendaftaran;
use frontend\models\Angkatan;
/* @var $this yii\web\View */
/* @var $model frontend\models\Pendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
.box .box-solid {
     background-color: #F8F8F8;
}
</style>


<div class="col-xs-12 col-lg-12">
  <div class="<?php echo $model->isNewRecord ? 'box-success' : 'box-info'; ?> box view-item col-xs-12 col-lg-12"></div>
<div class="pendaftaran-form">

 <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Isikan Data ! 
         </h4>
          <span class="pull-right">
            <?= Html::a('Batal', ['/site/index'], ['class' => 'btn btn-warning']) ?>          
        </span>
      </div>
    <div class="box-body">
         
     <?php
	if($this->context->action->id == 'update')
		$action = ['update', 'id'=>$_REQUEST['id']];
	else
		$action = ['create'];
    ?>       
    <?php $bp=Yii::$app->user->identity->username?>
   <?php $form = ActiveForm::begin([ 'options' => ['enctype' => 'multipart/form-data',
   		'enableAjaxValidation' => true,'action' => $action,]]); ?>
	<div class="col-xs-12 col-lg-12 no-padding">
    <div class="col-sm-6">
    <?= $form->field($model, 'pd_bp')->textInput(['readOnly' => true,'value'=>$bp]) ?>
    
     <?= $form->field($model, 'pd_nama')->textInput(['readOnly' => true,'value'=>Yii::$app->user->identity->namaLengkap]) ?>

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
  </div>
     <div class="col-sm-6">
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
    </div>
</div>
    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
 	 <div class="col-xs-6">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', 
        	['class' => $model->isNewRecord ? 'btn btn-success fa-save ' : 'btn btn-primary fa-save ']) ?>
    	
    </div>
    </div>

    <?php ActiveForm::end(); ?>
       
</div></div></div>

</div>

