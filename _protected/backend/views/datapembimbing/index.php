<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\Mahasiswa;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DatapembimbingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pembimbing PKL';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if($model->isNewRecord) 
	echo $this->render('create', ['model' => $model]); 	
   else
	echo $this->render('update', ['model' => $model]); 	
?>


<div class="datapembimbing-index panel panel-info">

<div class="panel-heading">
        <h4>
        Data Pembimbing Mahasiswa
        </h4>
</div>
 
<?php Pjax::begin(); ?>  <div class="panel-body">  <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
        		[
        				'attribute'=>'mahasiswa',
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
        				'filter' => ArrayHelper::map(Mahasiswa::find()->all(), 'mhs_tahun', 'mhs_tahun')
        		],
        		            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 

?>
<?php Pjax::end(); ?></div>
</div>