<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dosen */

$this->title = $model->dsn_nama;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dosens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->dsn_nidn], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dsn_nidn',
            'dsn_nip',
            'dsn_nama',
            'dsn_notelp',
            'dsn_email:email',
        ],
    ]) ?>

</div>
