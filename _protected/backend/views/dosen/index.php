<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DosenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Data Dosen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index panel panel-info">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    
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
                    'title' => 'Tambah Data Dosen',
                    'class' => 'btn btn-success',
                    'onclick' => 'js:document.location="' . Url::to(['/dosen/create']) . '";'
              ]),
            ],
            '{toggleData}',
            '{export}'
        ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
        		'dsn_nidn',
        		'dsn_nip',
        		'dsn_nama',
        		
         
            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'panel' => [
            'type' => 'success',
            'heading' => 'Data Dosen',
//            'footer' => false
        ],
    ]);
    ?>
    
</div>
