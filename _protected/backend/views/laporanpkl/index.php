<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LaporanpklSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Semua judul laporan PKL Mahasiswa');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporanpkl-index panel info">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'bp',
        	'nama.mhs_nama',
            'judul',
			
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
