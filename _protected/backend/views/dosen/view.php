<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Dosen */

$this->title = $model->dsn_nama;
$this->params['breadcrumbs'][] = ['label' => 'Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->dsn_nidn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->dsn_nidn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Yakin Anda Ingin Hapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dsn_nip',
        	'dsn_nidn',
            'dsn_nama',
            'dsn_notelp',
            'dsn_email:email',
        ],
    ]) ?>

</div>
