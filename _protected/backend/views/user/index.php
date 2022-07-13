<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Data User');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index panel panel-info">

   
   <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<div class="panel-heading">
    <p>
        <?= Html::a(Yii::t('app', 'Tambah Data'), ['signup'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            'namaLengkap',
           // 'auth_key',
            //'password_hash',
            // 'password_reset_token',
             'role',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
