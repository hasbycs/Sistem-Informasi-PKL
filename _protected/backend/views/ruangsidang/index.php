<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RuangsidangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ruang Sidang PKL');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruangsidang-index panel panel-info">
   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class=panel-heading>
    <p>
        <?= Html::a(Yii::t('app', 'Tambah'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'noLokal',
            'gedung',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
