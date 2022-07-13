<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Pendaftaran;
use kartik\date\DatePicker;
use yii\helpers\Url;
use kartik\time\TimePicker;
use backend\models\Dosen;
use backend\models\Ruangsidang;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Sidang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sidang-form panel panel-info">

        <div class="panel-heading">
            <h4>
                <?= $this->title ?>
                <span class="pull-right">
                    <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
                </span>
            </h4>
        </div>
        <div class="panel-body">

    <?php $form = ActiveForm::begin([
                'options' => [
                    'class' => 'col-md-8'               
                ],
            		//'enableAjaxValidation' => true
       ]); ?> 
                      	
	
           
     <?=		$form->field($model, 's_bp')->widget(Select2::classname(), [
     			'data' => ArrayHelper::map(Pendaftaran::findBySql("select * from pendaftaran p join mahasiswa m on p.pd_bp=m.mhs_bp")
     					->asArray()
     					->All(),'pd_bp','mhs_nama'),
     			'options' => ['placeholder' => 'Pilih Mahasiswa ...','id'=>'bepe'],
			    'pluginOptions' => [
			        'allowClear' => true
			    ],
				]);
	?>      
           
	<?=  $form-> field($model, 's_tgl_sidang')->widget(DatePicker::classname(), [
		'value' => date('d-M-Y'),
         //'options' => ['placeholder' => 'Start date & time'],
         'pluginOptions' => [
         'autoclose' => true,
         'format' => 'yyyy-mm-dd', 
           ]
          ]);
    ?>
      
    <?= $form->field($model, 's_ruang')->dropDownList(ArrayHelper::map(Ruangsidang::find()
			->asArray()->all(),'id','noLokal'),['prompt'=>'Pilih Lokal']) ?>
		
	<?=		$form->field($model, 's_penguji')->widget(Select2::classname(), [
				'data' => ArrayHelper::map(Dosen::find()->all(),'dsn_nidn','dsn_nama'),
			    'options' => ['placeholder' => 'Pilih Penguji ...'],
			    'pluginOptions' => [
			        'allowClear' => true
			    ],
				]);
	?>
           
    <?= $form->field($model, 's_jam')->widget(TimePicker::classname(),[
    	'name' => 's_jam',   		
    	'pluginOptions' => [
    		//'showSeconds' => true
    		//'value' => '11:24 AM',
    	]]); 
    ?>
  
    <?= $form->field($model, 's_jam2')->widget(TimePicker::classname(),[
    		'name' => 's_jam2',
    		 'pluginOptions' => [
    		//'showSeconds' => true
    		//'value' => '11:24 AM',
    	]]); 
    ?>
    
    <?= $form->field($model, 's_pembimbing')->textInput(['readOnly'=>true,'id'=> 'nama-mahasiswa']) ?>


    <?= $form->field($model, 's_tempat_pkl')->textInput(['readOnly'=>true,'id'=> 'prodi-mahasiswa']) ?>
    
    <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<?php 
$urlparam = Url::to(['getmahasiswa']);
$js = <<< JS
       $('#bepe').on('change',function(){
	
        $.ajax({
            url:'{$urlparam}',
            type:'GET',
            data:{id:$(this).val()},
            success:function(data){
            data= JSON.parse(data);
            $('#nama-mahasiswa').val(data.s_pembimbing);
            $('#prodi-mahasiswa').val(data.s_tempat_pkl);
            }
        });
    });
JS;
$this->registerJs($js);
?>
