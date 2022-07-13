<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Sidang */

$this->title = $model->s_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jadwal Sidang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sidang-view">
    <p>
        <?= Html::a(Yii::t('app', 'Kembali'), ['index'], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'s_id',
            's_bp',
            'sBp.mhs_nama',
            //'sBp.mhs_bp',
            //'sBp.mhs_nama',
            's_tgl_sidang',
            //'s_ruang',
            'ruang.noLokal',
            'ruang.gedung',
            's_jam','s_jam2',
            's_pembimbing',
            [
                   'attribute'=>  'sPenguji.dsn_nama',
            ],
            //'sPenguji.dsn_nama',
            's_tempat_pkl',
        ],
    ]) ?>

</div>
