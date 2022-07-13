<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendaftaran */

$this->title = $model->pd_bp;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-view">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pd_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pd_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Hapus Data?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'pd_id',
            'pd_bp',
        	'mahasiswa0.mhs_nama',       
        	'pd_instansi0.p_nama',
            'pd_tgl_mulai',
            'pd_tgl_selesai',
        	//'datapem.pembimbing',
        	//'pd_dosen0.dsn_nama',
            'pd_pbblap',
        ],
    ]) ?>

</div>
