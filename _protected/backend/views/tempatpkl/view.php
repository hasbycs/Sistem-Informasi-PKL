<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tempatpkl */

$this->title = $model->p_nama;
$this->params['breadcrumbs'][] = ['label' => 'Tempatpkls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempatpkl-view">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->p_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->p_id], [
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
            //'p_id',
            'p_nama',
        		'pProvinsi.nama_provinsi',
            'p_alamat:ntext',
            'p_email:email',
            'p_notelp',
        ],
    ]) ?>

</div>
