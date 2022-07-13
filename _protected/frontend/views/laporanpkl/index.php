<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LaporanpklSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Laporanpkls');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index panel panel-info">

  <div class="panel-heading">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Masukkan Judul PKL'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a(Yii::t('app', 'Edit Judul PKL'), ['view'], ['class' => 'btn btn-success']) ?>
    </p>
      </div>
       <div class="panel-body">
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'bp',
            'judul',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
</div>