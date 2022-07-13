<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\Mahasiswa;
use backend\models\Angkatan;
use backend\models\Tahunbp;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DatapembimbingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data Pembimbing Mahasiswa');
$this->params['breadcrumbs'][] = $this->title;
?>
 
<div class="datapembimbing-index panel panel-info">

<div class="panel-heading">
        <h4><?= Html::encode($this->title) ?>
       
        <span class="pull-right">
            <?= Html::a('Kembali', ['/datapembimbing/index'], ['class' => 'btn btn-warning']) ?>
           
        </span>
        </h4>        
    </div>
    
<?php 

Pjax::begin(); ?>  <div class="panel-body">  <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'export'=>false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],            
        		[
        				'attribute' => 'mahasiswa',
        				'value' => 'mahasiswa0.mhs_nama',
        		],
        		[
        				'attribute' => 'pembimbing',
        				'value' => 'pembimbing0.dsn_nama',          				
        		],
        		[
        				'attribute' => 'ankt_bp',
        				//'attribute' => 'mhs_tahun',
        				'value'=>'mahasiswa0.mhs_tahun',
        				'filter' => ArrayHelper::map(Tahunbp::find()->all(), 'angkatan','angkatan')
        		],
            

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 

?>
</div>
<?php Pjax::end(); ?></div>


