<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Datapembimbing */

$this->title = $model->mahasiswa;
$this->params['breadcrumbs'][] = ['label' => 'Datapembimbings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapembimbing-view">
 <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
        		'mahasiswa0.mhs_nama',
        		'pembimbing0.dsn_nama',
         
        ],
    ]) ?>

</div>
