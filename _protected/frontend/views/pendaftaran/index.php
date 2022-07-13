<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\Angkatan;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PendaftaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data PKL Mahasiswa');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php 
if (Yii::$app->user->identity->role==2){
$bp=Yii::$app->user->identity->username;
if($model->isNewRecord ) 
	echo $this->render('create', ['model' => $model,'bp'=>$bp]); 	
   else
	echo $this->render('update', ['model' => $model]); 	
}
?>

<div class="pendaftaran-index panel panel-info">
 <div class="panel-heading">
        <h4>Data PKL Mahasiswa
        
         <span class="pull-right">        
            <?= Html::a('Kembali', ['/site/index'], ['class' => 'btn btn-warning']) ?>          
        </span>
         </h4>
    </div>
     
<?php Pjax::begin(); ?>  <div class="panel-body">  <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'pd_id',
            //'pd_bp',
        		[
        				'attribute'=>'pd_bp',
        				'value'=>'mahasiswa0.mhs_nama', 
        		],
        	              		
            [
        			'attribute'=>'pd_instansi',
            		'value'=>'pd_instansi0.p_nama',
            ],
        	'pd_tgl_mulai',
            'pd_tgl_selesai',
           [
           		'attribute'=>'tahun',
           		'value'=>'tah.tahun',
           		'filter'=> ArrayHelper::map(Angkatan::find()->all(), 'id','tahun')
           		],
            ['class' => 'yii\grid\ActionColumn',
            	'header'=>'Aksi',
],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div></div>
