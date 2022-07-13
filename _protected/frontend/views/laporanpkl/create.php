<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Laporanpkl */

$this->title = Yii::t('app', 'Masukkan Judul Laporan PKL');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Laporanpkls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporanpkl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    	'bepe'=>$bepe,
    ]) ?>

</div>
