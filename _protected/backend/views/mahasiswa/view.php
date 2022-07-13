<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = $model->mhs_nama;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-view panel panel-info">
  
<div class="panel heading">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mhs_bp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mhs_bp], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Hapus Data ?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
<div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'mhs_id',
            'mhs_bp',
            'mhs_nama',
            'mhs_tempat_lahir',
            'mhs_tgl_lahir',
        	'mhs_kelas',
            'mhs_prodi',
            'mhs_jurusan',
        	'mhs_tahun',
            'mhs_email:email',
            'mhs_notelp',
        ],
    ]) ?>

</div>
</div>
