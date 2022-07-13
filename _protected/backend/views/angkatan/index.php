<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AngkatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data Periode Kaprodi');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angkatan-index panel panel-info">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="panel-heading">
    <p>
        <?= Html::a(Yii::t('app', 'Tambahkan Data'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tahun',
            'kaprodi0.dsn_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
