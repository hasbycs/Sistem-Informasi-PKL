<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
//use yii\bootstrap\ActiveForm;
use backend\models\Tahunbp;
use yii\helpers\Url;
use backend\models\Kelas;



//use yii\widgets\ActiveForm;

//use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><i class="glyphicon glyphicon-upload"></i> Import data excel</h4>			              
            </div>
           
            <a  href="<?php echo \yii\helpers\Url::to(['/mahasiswa/upload']);?>" class="small-box-footer">import(*.csv) <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
   <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
    	'filterModel' => $searchModel,
        'responsive' => true,
        'hover' => true,
    	'export'=>false,
        'toolbar' => [
            [
                'content' =>Html::button('<i class="glyphicon glyphicon-plus"></i>', [
                    'type' => 'button',
                    'title' => 'Tambah Data Mahasiswa',
                    'class' => 'btn btn-success',
                    'onclick' => 'js:document.location="' . Url::to(['/mahasiswa/create']) . '";'
                ]),
            ],     		
            '{toggleData}',
//            '{export}'
        ],
    		'columns' => [
    				['class' => 'kartik\grid\SerialColumn'],
    				'mhs_bp',
    				'mhs_nama',     				
    				[
    						'label' => 'Kelas',
    						'attribute' => 'mhs_kelas',
    						//'value' => 'mhs_kelas',
    						'filter' => ArrayHelper::map(Kelas::find()->all(), 'kls', 'kls')
    				],
    				
    				[
    						'label' => 'Angkatan',
    						'attribute' => 'mhs_tahun',
    						'filter' => ArrayHelper::map(Tahunbp::find()->all(), 'angkatan', 'angkatan')		
					 ],
    				'mhs_prodi',
    			
    				//'mhs_tempat_lahir',
    				//'mhs_tgl_lahir',
    				//'mhs_jurusan',
    				//'mhs_email:email',
    				//'mhs_notelp',
    				['class' => 'kartik\grid\ActionColumn'],
    		],
        	'panel' => [
            'type' => 'success',
            'heading' => 'Mahasiswa',
//           'footer' => false
        ],
    ]);
    ?>

</div>





























<?php /* ?>
<div class="mahasiswa-form">
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

    <?= $form->field($model, 'mhs_bp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_tempat_lahir')->textInput(['maxlength' => true]) ?>

<?=  $form-> field($model, 'mhs_tgl_lahir')->widget(DatePicker::classname(), [
		'value' => date('d-M-Y', strtotime('-21 years')),
                    //'options' => ['placeholder' => 'Start date & time'],
                    'pluginOptions' => [
                     'autoclose' => true,
                    'format' => 'yyyy-mm-dd', 
                    		
                    ]
                ]);
    ?>  

    <?= $form->field($model, 'mhs_prodi')->textInput(['maxlength' => true,'value'=>'Administrasi Bisnis','readOnly'=>true]) ?>

    <?= $form->field($model, 'mhs_jurusan')->textInput(['maxlength' => true,'value'=>'Administrasi Niaga','readOnly'=>true]) ?>

    <?= $form->field($model, 'mhs_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_notelp')->textInput(['maxlength' => true]) ?>

            <div class="form-group" align="center">
                <?= Html::submitButton($model->isNewRecord ? 'create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        </div>

</div> 
 */ ?>
    <?php /* ?>
<div class="mahasiswa-index panel panel-info">
       <div class="panel-heading">
        <h4><?= Html::encode($this->title) ?>
        <span class="pull-right">
            <?= Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-primary btn-sm']) ?>        
        </span>
        </h4>
    </div>
     <div class="panel-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
        	//['class' => 'kartik\grid\SerialColumn'],
            //'mhs_id',
            'mhs_bp',
            'mhs_nama',
            'mhs_tempat_lahir',
            'mhs_tgl_lahir',
        	'mhs_prodi',
            'mhs_jurusan',
            'mhs_email:email',
            'mhs_notelp',
            [
            		//'attribute'=>'aksi',
            	     'header' => 'Aksi',
            		'class' => 'yii\grid\ActionColumn'],
        			//'class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
*/ ?>