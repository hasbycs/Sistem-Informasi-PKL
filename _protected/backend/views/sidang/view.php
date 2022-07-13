<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sidang */

$this->title = $model->s_bp;
$this->params['breadcrumbs'][] = ['label' => 'Sidang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sidang-view">    
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->s_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->s_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Kembali', ['index'], ['class' => 'fa-mail-reply-all btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'s_id',
        	'sBp.mhs_bp',	
        	'sBp.mhs_nama',
            's_tgl_sidang',           
            'ruang.noLokal',
            'ruang.gedung',
            's_jam',
        	's_jam2',
            's_pembimbing',
        	//'s_penguji',
        		
        	'sPenguji.dsn_nama',
        		
        		//[ 'attribute'=>'s_penguji','value' => 'sPenguji.dsn_nama',],
        		
        	's_tempat_pkl',
        ],
    ]) ?>

</div>
