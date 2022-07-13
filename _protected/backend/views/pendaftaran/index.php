<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Angkatan;
use backend\models\Pendaftaran;
use backend\models\Mahasiswa;
use yii\helpers\Url;

use yii\helpers\ArrayHelper;
use backend\models\Tempatpkl;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PendaftaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pendaftaran PKL Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-index panel panel-info">
 <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'responsive' => true,
        'hover' => true,
    	'export'=>false,
        'toolbar' => [
            [
                //'content' =>
                //Html::button('<i class="glyphicon glyphicon-plus"></i>', [
                 //   'type' => 'button',
                 //   'title' => 'Tambah Data Pendaftaran',
                 //   'class' => 'btn btn-success',
                //    'onclick' => 'js:document.location="' . Url::to(['/pendaftaran/create']) . '";'
             // ]),
            ],
            '{toggleData}',
//            '{export}'
        ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
        		'pd_bp',
        		[
        		'header'=>'Nama',		
        	  	'value'=> 'mahasiswa0.mhs_nama',
        		],
        		[
        				'label' => 'Tahun',
        				'attribute' => 'tahun',
        				'filterType' => GridView::FILTER_SELECT2,
        				'filter' => ArrayHelper::map(Angkatan::find()->all(),'id','tahun'), 
        				'filterWidgetOptions' => [
        						'pluginOptions' => ['allowClear' => true],
        				],
        				'filterInputOptions' => ['placeholder' => 'Tahun'],
        				'value'=>'ang.tahun',
        				'format' => 'raw'
        		],
        		[
        				'label' => 'Kelas',
        				'attribute' => 'kelas',
        				'filterType' => GridView::FILTER_SELECT2,
        				'filter' => ArrayHelper::map(Mahasiswa::find()->all(),'mhs_kelas','mhs_kelas'),
        				'value'=>'mahasiswa0.mhs_kelas'
        		],
        		[
        				'label' => 'Perusahaan',
        				'attribute' => 'pd_instansi',
        				'filterType' => GridView::FILTER_SELECT2,
        				'filter' => ArrayHelper::map(Tempatpkl::find()->all(),'p_id','p_nama'),
        				'filterWidgetOptions' => [
        						'pluginOptions' => ['allowClear' => true],
        				],
        				'filterInputOptions' => ['placeholder' => 'Perusahaan'],
        				'value'=>'pd_instansi0.p_nama',
        				'format' => 'raw'
        		],
        		
        		'pd_tgl_mulai',
        		'pd_tgl_selesai',
        		
         
            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'panel' => [
            'type' => 'success',
            'heading' => 'Data Pendaftaran',
//            'footer' => false
        ],
    ]);
    ?>

</div>
