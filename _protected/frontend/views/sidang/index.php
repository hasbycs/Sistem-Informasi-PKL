<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SidangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Jadwal Sidang');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (Yii::$app->user->identity->role == 3){ ?>
<div class="sidang-index panel panel-info">
<div class="panel-heading">
        <h4>Jadwal Sidang  <?php echo Yii::$app->user->identity->namaLengkap?>
        <span class="pull-right">
            <?= Html::a('Kembali', ['/site/index'], ['class' => 'btn btn-warning']) ?>
           
        </span>
        </h4>
    </div>

<table class="table table-striped table-condensed " style="color: black;">
                                    <thead>
                                        <tr>                          
                                        <th class="text-left" >No</th>     
                                        <th class="text-left" >No BP</th>      
                                        <th class="text-left"  >Nama Mahasiswa</th> 
                                        <th class="text-left" >Jam</th>
                                        <th class="text-left" >Tanggal</th>    
                                        <th class="text-left"  >Ruang</th>   
                                        <th class="text-left"  >Pembimbing</th>  
                                        <th class="text-left"  >Penguji</th>                                                   
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $no=0;
                                       foreach ($data as $dataa){
                                       	$no++;
                                           ?>
                                         		<tr class="odd gradeX">
                                        		<td><?php echo $no?></td>
                                        		<td><?php echo $dataa['s_bp'];  ?></td>     
                                        		<td><?php echo $dataa['mhs_nama'];  ?></td> 
                                        		<td><?php echo $dataa['s_jam']; echo ' - '; echo $dataa['s_jam2'];?></td>
                                        		<td><?php echo $dataa['s_tgl_sidang'];  ?></td>
                                        		<td><?php echo $dataa['noLokal'];  ?></td>
                                        		<td><?php echo $dataa['s_pembimbing'];  ?></td>    
                                           		<td><?php echo $dataa['dsn_nama'];  ?></td>                                   				                                                                                                                                                                               
                                         </tr> 
                                        <?php
                                       }                                    
                                       ?>
                                    </tbody>
                                </table>
                                </div>

<?php  }else{?>

<div class="sidang-index panel panel-info">
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<div class="panel-heading">
        <h4><?= Html::encode($this->title) ?>
        <span class="pull-right">
            <?= Html::a('Kembali', ['/site/index'], ['class' => 'btn btn-warning']) ?>          
        </span>
        </h4>
    </div>
    <div class="box-body">
          <div class="callout callout-info" >
        <span class="pull-center" >
        <h3> <i class="glyphicon glyphicon-calendar"> </i> Jadwal Sidang Saya : <br><i class="glyphicon glyphicon-list-alt">___</i><b><?php echo $mhssidang['s_tgl_sidang'];?></b>
        	<br><i class="glyphicon glyphicon-home">___</i><b><?php echo $mhssidang['noLokal'] ?></b>  <?php echo $mhssidang['gedung']?><br><i class="glyphicon glyphicon-time">___</i> 
        	<b><?php echo $mhssidang['s_jam']?> - <?php echo $mhssidang['s_jam2']?></b><br><i class="glyphicon glyphicon-user">___</i> <b><?php echo $mhssidang['dsn_nama'] ?></b> </h3>
        </span>
        </div>
        </div>
    
</div>
 <?php }?>    
   <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'responsive' => true,
        'hover' => true,
    	'export'=>false,
    	//'gridview' => ['class' => 'kartik\grid\Module'],
        'toolbar' => [
            [
                'content' =>
               Html::button('<i class="glyphicon glyphicon-home"></i>', [
                   'type' => 'button',
                   'title' => 'kembali',
                    'class' => 'btn btn-success',
                   'onclick' => 'js:document.location="' . Url::to(['/site/index']) . '";'
                ]),
           ],
            '{toggleData}',
            '{export}'
        ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
        		's_bp',
        		[
        				'attribute'=>'sBp.mhs_nama',
        				'header' => 'Nama',
        		],
        		's_tgl_sidang',
        		[
        				'attribute'=>'s_ruang',
        				'value'=> 'ruang.noLokal',
        		],
        		's_jam',
        		's_jam2',
        		's_pembimbing',
        		[
        				'attribute'=>'s_penguji',
        				'value' => 'sPenguji.dsn_nama',
        		],
        		
            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'panel' => [
            'type' => 'success',
            'heading' => 'Data Seluruh Jadwal Sidang',
//            'footer' => false
        ],
    ]);
    ?>
 









