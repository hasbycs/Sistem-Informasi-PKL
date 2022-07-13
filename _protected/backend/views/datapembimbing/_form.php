<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Tahunbp;
use backend\models\Dosen;
use backend\models\Mahasiswa;
use kartik\select2\Select2;

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Datapembimbing */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="col-xs-12 col-lg-12">
 <div class="<?php echo $model->isNewRecord ? 'box-success' : 'box-info'; ?> box view-item col-xs-12 col-lg-12">
<div class="datapembimbing-form">
	<?php
	if($this->context->action->id == 'update')
		$action = ['update', 'id'=>$_REQUEST['id']];
	else
		$action = ['create'];
    ?>
	
    <?php $form = ActiveForm::begin([
			'id' => 'datapembimbing-form',
			'action' => $action,
			'enableAjaxValidation' => true,
			
    ]); ?>
    
   <div class="col-xs-12 col-lg-12 no-padding">
   <div class="col-sm-4">	
   <?= $form->field($model,'ankt_bp')->dropDownList(
   						ArrayHelper::map(Tahunbp::find()->all(),'angkatan','angkatan'),
						[
		           				'prompt'=> Yii::t('app', '--- Pilih Tahun ---'),
		            			'onchange'=>'
										$.post("mahasiswa/lists?id='.'"+$(this).val(),function(data){
										$("select#datapembimbing-mahasiswa").html(data);
									});'		
						]);?>					                 
		   				
   </div>   
   <div class="col-sm-4">
   
   <?=
	    $form->field($model, 'mahasiswa')->widget(Select2::classname(), [
	    'data' => ArrayHelper::map(Mahasiswa::find()->all(),'mhs_bp','mhs_nama'),	    		
	    'language' => 'en',
	    'options' => ['placeholder' => 'Pilih Mahasiswa ...'],
	    'pluginOptions' => [
	        'allowClear' => true
	    ],
		]);
	?>				   
	</div>
   
    <div class="col-sm-4">    
    <?=
	    $form->field($model, 'pembimbing')->widget(Select2::classname(), [
	    'data' => ArrayHelper::map(Dosen::find()->all(),'dsn_nidn','dsn_nama'),	    		
	    'language' => 'en',
	    'options' => ['placeholder' => 'Pilih Dosen ...'],
	    'pluginOptions' => [
	        'allowClear' => true
	    ],
		]);
	?>
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
</div>



