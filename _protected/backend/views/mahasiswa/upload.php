
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\UploadedFile;

?>
<div class="import-form panel panel-info">
<div class="panel heading">
<?php $this->title='Import file excel format (*.CSV)'; ?>
</div>
<?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data','layout'=>'horizontal']]); ?>
<?= $form->field($model,'file')->fileInput() ?>

<div class="form-group">
<?= Html::submitButton('Import',['class'=>'fa fa-save btn-lg btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

</div>
