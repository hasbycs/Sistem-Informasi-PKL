<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\Url;
//use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SidangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Sidang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sidang-index panel panel-info">
   
    <div class="panel-body">

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
                'content' =>
                Html::button('<i class="glyphicon glyphicon-plus"></i>', [
                    'type' => 'button',
                    'title' => 'Tambah Data Pendaftaran',
                    //'class' => 'showModalButton btn btn-success',
                		'class' => 'btn btn-success',
                   'onclick' => 'js:document.location="' . Url::to(['/sidang/create']) . '";'
              ]),
            ],
            '{toggleData}',
//            '{export}'
        ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
        		[
        				'header'=>'No BP',
        			'attribute'	=>'s_bp',
        				
        		],
        		[
        				'attribute'=>'sBp.mhs_nama',
        				'header' => 'Nama',
        		],
        		's_tgl_sidang',
        			[	'attribute'=>'s_ruang',
        				'value'=>'ruang.noLokal'],
        		's_jam',
        		's_jam2',
        		's_pembimbing',
        		[
        				'attribute'=>'s_penguji',
        				'value' => 'sPenguji.dsn_nama',
        		],
        		['class' => 'kartik\grid\ActionColumn',]
        	/*	['class' => 'kartik\grid\ActionColumn',
        				'header'=>'Aksi',
        				'template'=>'{update}{delete}',
        				'buttons'=>[	
        						'update'=>function($url,$model){
        								$id = $model->s_id;
        								return Html::button('',['value' => Url::to(['/sidang/update','id'=>$id]),
        								'title' => 'Update Sidang', 'class' => 'showModalContent glyphicon glyphicon-edit btn btn-success']);},   
							   	'delete'=>function($url,$model){
							    		return Html::a('', ['delete', 'id' => $model->s_id], [
							    		'class' => 'glyphicon glyphicon-remove btn btn-danger',
							    		'data' => [
							    				'confirm' => 'Are you sure you want to delete this item?',
							    				'method' => 'post',
							    ],]);   
   								}]
    				],  */
        ],
        'panel' => [
            'type' => 'success',
            'heading' => 'Data Sidang',
           'footer' => false
       ],
    	]);
    ?>
    </div>

</div>
