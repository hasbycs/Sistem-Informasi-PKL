<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tempatpkl */

$this->title = $model->p_nama;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tempatpkls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempatpkl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
         <?= Html::a(Yii::t('app', 'Kembali'), ['index'], [
            'class' => 'btn btn-warning',           
            ]) ?>
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
