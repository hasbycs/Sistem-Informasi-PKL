<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TempatpklSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instansi / Perusahaan';
$this->params['breadcrumbs'][] = $this->title;
?>
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
                   'title' => 'Tambah Data Perusahaan/Instansi',
                    'class' => 'btn btn-success',
                   'onclick' => 'js:document.location="' . Url::to(['/tempatpkl/create']) . '";'
                ]),
           ],
            '{toggleData}',
            '{export}'
        ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
        		'p_nama',     		
        		[
        				'attribute'=>'p_provinsi',
        				'value'=>'pProvinsi.nama_provinsi',
        		],
        		[
        				'attribute'=>'p_alamat',
        				'format' => 'text',
   				],       		         
            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'panel' => [
            'type' => 'success',
            'heading' => 'Data Perusahaan dan Instansi',
//            'footer' => false
        ],
    ]);
    ?>
