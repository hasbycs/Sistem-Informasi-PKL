<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pendaftaran */

$this->title = $model->pd_bp;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pendaftarans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->pd_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'kembali'), ['index'],['class'=>'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [   
            'pd_bp',
        	'mahasiswa0.mhs_nama', 
            'pd_instansi0.p_nama',       		
            'pd_tgl_mulai',
            'pd_tgl_selesai',
        		
            'pd_pbblap',
        ],
    ]) ?>

</div>
