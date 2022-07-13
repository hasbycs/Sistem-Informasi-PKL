<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\Mahasiswa;
use backend\models\Tahunbp;
use backend\models\Angkatan;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DatapembimbingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data Pembimbing Mahasiswa');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (Yii::$app->user->identity->role==3){
?>
<div class="datapembimbing-index panel panel-info">
<div class="panel-heading">
        <h4>Mahasiswa yang di bimbing <?php echo Yii::$app->user->identity->namaLengkap?>
        <span class="pull-right">
            
             <?= Html::a('Semua', ['/datapembimbing/indexall'], ['class' => 'btn btn-success']) ?>
             <?= Html::a('Kembali', ['/site/index'], ['class' => 'btn btn-warning']) ?>
           
        </span>
        </h4>
        
    </div>
<?php /*?>
 		<div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                                    <thead>
                                        <tr>                          
                                         <th style="width: 13px " class="text-left">No</th>     
                                         <th class="text-left" >No BP</th>      
                                        <th class="text-left" >Nama Mahasiswa</th> 
                                        <th class="text-left" >Angkatan</th> 
                                        <th style="width: 50px " class="text-left"  >Detail</th>                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $no=0;
                                       foreach ($data as $dataa){
                                       	$no++;
                                           ?>
                                         		<tr>
                                        		<td><?php echo $no?></td>
                                        		<td><?php echo $dataa['mhs_bp'];  ?></td>     
                                           		<td><?php echo $dataa['mhs_nama'];  ?></td>
                                           		<td><?php echo $dataa['mhs_tahun'];  ?></td>       
                                           		<td>
                                           		 <a class="glyphicon glyphicon-zoom-in btn btn-block btn-success btn-xs"  href="<?php echo \yii\helpers\Url::to(['/mahasiswa/view','id'=> $dataa['mhs_bp']]);?>">lihat</a>
                                           		
                                           		</td>                              				                                                                                                                                                                               
                                         </tr> 
                                        <?php
                                       }
                                       
                                       ?>
                                    </tbody>
                                </table>
                                </div> */?>
                                
       
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider2,
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
        		[
        				'label' => 'Tahun',
        				'attribute' => 'ankt_bp',
        				'filterType' => GridView::FILTER_SELECT2,
        				'filter' => ArrayHelper::map(Tahunbp::find()->all(),'angkatan','angkatan'),
        				'filterWidgetOptions' => [
        						'pluginOptions' => ['allowClear' => true],
        				],
        				'filterInputOptions' => ['placeholder' => 'Tahun'],
        				//'value'=>'ang.tahun',
        				'format' => 'raw'
        		],
        				//'attribute' => 'ankt_bp',
      				
        		
        		[
        				'attribute' => 'mahasiswa',
        				'value' => 'mahasiswa0.mhs_nama',
        		],
        		[
        				'attribute' => 'pembimbing',
        				'value' => 'pembimbing0.dsn_nama',
        		],        		        
        	
            //['class' => 'kartik\grid\ActionColumn'],
        ],
        
    ]);
    ?>                    
                                
     </div>

<?php }else {?>
 

 
 
<div class="datapembimbing-index panel panel-info">

<div class="panel-heading">
        <h4><?= Html::encode($this->title) ?>
       
        <span class="pull-right">
            <?= Html::a('Kembali', ['/site/index'], ['class' => 'btn btn-warning']) ?>
           
        </span>
        </h4>        
    </div>
     <span class="pull-center">
        <h3> <i>Dosen Pembimbing Saya</i> : <b><?php echo $dos['dsn_nama']?> </b>  </h3>
        </span>
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
<?php }?>

