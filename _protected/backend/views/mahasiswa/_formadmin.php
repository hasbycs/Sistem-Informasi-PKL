<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
//use yii\widgets\ActiveForm;
//use kartik\form\ActiveForm;
use kartik\builder\Form;
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\bootstrap\ActiveForm;
use backend\models\Kelas;
use backend\models\Tahunbp;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="mahasiswa-form">
<div class="panel panel-info">
        <div class="panel-heading">
            <h4>
                <?= 'Biodata Mahasiswa'?>
                <span class="pull-right">
                    <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
                </span>
            </h4>
        </div>
        <div class="panel-body">
 <?php $form = ActiveForm::begin(); ?>
                <div class="col-sm-6">
                <?php echo $form->field($model, 'mhs_bp')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'mhs_nama')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'mhs_tempat_lahir')->textInput(['maxlength' => true]) ?>
               <?php  echo $form->field($model, 'mhs_tgl_lahir')->widget(DatePicker::className(), [
                        'convertFormat' => true,
                        'pluginOptions' => [
                         'format' => 'yyyy-MM-dd',
                         'todayHighlight' => true,
                            'autoclose'=>true
                        ]
                    ]);
               ?>
               <?php echo $form->field($model, 'mhs_kelas')->dropDownList(ArrayHelper::map(Kelas::find()->All(),'kls','kls')) ?>                 
               </div>
                <div class="col-sm-6">
                <?php echo $form->field($model, 'mhs_tahun')->dropDownList(ArrayHelper::map(Tahunbp::find()->All(),'angkatan','angkatan')) ?>                 
               
                <?php echo $form->field($model, 'mhs_prodi')->textInput(['maxlength' => true,'value'=>'Administrasi Bisnis']) ?>
                <?php echo $form->field($model, 'mhs_jurusan')->textInput(['maxlength' => true,'value'=>'Administrasi Niaga']) ?>
                <?php echo $form->field($model, 'mhs_email')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'mhs_notelp')->textInput(['maxlength' => true]) ?>             
                </div>                
            </div>
            <div class="form-group" align="center" style="box-sizing: border-box;">
             <?= Html::a('Batal', ['index'], ['class' => 'fa fa-ban btn btn-default']) ?>
             
                 <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'fa fa-save btn btn-primary' : 'btn btn-primary']) ?>
             
            </div>
              <?php ActiveForm::end(); ?>
</div></div>
            
