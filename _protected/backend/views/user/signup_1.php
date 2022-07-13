<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$this->title = 'Daftar User Mahasiswa/Dosen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
<div class="panel panel-info">
<div class="panel-heading">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
    <p>Isikan Username sesuai dengan BP (Mahasiswa) atau NIP (Dosen)</p>

   <div class="panel-body">
            	<?php $form = ActiveForm::begin(['layout' => 'horizontal','id' => 'form-signup','options' => ['class' => 'col-md-8']]); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'id'=>'userr','maxlength' => true],['style' => 'width:250px;text-align:left;']) ?>
                <?= $form->field($model, 'namaLengkap')->textInput(['id'=>'namaa']) ?>                           
                <?= $form->field($model, 'role')->dropDownList(['1'=>'admin','2'=>'mahasiswa','3'=>'dosen']) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group" align="center">
                    <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<?php 
$urlparam = Url::to(['getuserr']);
$js = <<< JS
       $('#userr').on('change',function(){
	
        $.ajax({
            url:'{$urlparam}',
            type:'GET',
            data:{id:$(this).val()},
            success:function(data){
            data= JSON.parse(data);
                $('#namaa').val(data.name);
            
            }
        });
    });
JS;
$this->registerJs($js);
?>
<?php 
$urlparam = Url::to(['getuser']);
$js = <<< JS
       $('#userr').on('change',function(){
	
        $.ajax({
            url:'{$urlparam}',
            type:'GET',
            data:{id:$(this).val()},
            success:function(data){
            data= JSON.parse(data);
                $('#namaa').val(data.name);
            
            }
        });
    });
JS;
$this->registerJs($js);
?>