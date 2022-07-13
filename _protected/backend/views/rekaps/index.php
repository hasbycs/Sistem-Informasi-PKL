<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;
//use yii\widgets\ActiveForm;
use backend\models\Angkatan;
use backend\models\Sidang;
use yii\helpers\ArrayHelper;
use kartik\builder\Form;
use backend\models\Kelas;

/* @var $this yii\web\View */
?>
<!--<h1>laporan</h1>-->

<?php 
$this->title = 'Data Sidang';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="laporan-search">
    <h4 style="font-weight: bold;">Pencarian :</h4>
    <?php
    $form = ActiveForm::begin([
                'type' => ActiveForm::TYPE_VERTICAL
    ]);
    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 3,
        'attributes' => [
            'tahun' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => ArrayHelper::map(Angkatan::find()
            		->all(),'id','tahun'), 'options' => ['prompt' => '- Pilih Periode -', 'onchange' => 'submit()']],
        	'kelas'=>['type' => Form::INPUT_DROPDOWN_LIST, 'items' => ArrayHelper::map(Kelas::find()
        				->all(),'kls','kls'), 'options' => ['prompt' => '- Pilih Kelas -', 'onchange' => 'submit()']],
        ]
    ]);
    $arrData = urlencode(serialize(['tahun' => $model->tahun,'kelas'=>$model->kelas]));
    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 2,
        'attributes' => [
            'actions' => [
                'type' => Form::INPUT_RAW,
                'value' => '<div style="text-align: left; margin-top: 0px">' .
            		Html::submitButton(' Tampilkan', ['type' => 'button', 'class' => 'fa fa-search btn btn-primary']) .
            		((!empty($data)) ? Html::a('Cetak', ['print', 'arrdata'=>$arrData,'act'=>'cetak-sidang'], ['class' => 'fa fa-print btn btn-success', 'style' => 'margin-left:10px;', 'target' => '_blank']) : '') .
            		'</div>'
            ],
        ]
    ]);

    ActiveForm::end();
    ?>
    <?php
    if (!empty($data)) {
        ?>
        <div style="height: 450px;overflow-y: scroll;overflow-x: scroll;margin-top: 15px;">
            <?php
            echo $this->render('_index', [
            		'data'=>$data
            ]);
            ?>
        </div>
        <?php
    }
    ?>

</div>
