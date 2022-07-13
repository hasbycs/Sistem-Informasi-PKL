<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Laporanpkl */

$this->title = $model->bp;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Laporanpkls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporanpkl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->bp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Kembali'), ['/site/index'], [  'class' => 'btn btn-danger',]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bp',
            'judul',
        ],
    ]) ?>

</div>
