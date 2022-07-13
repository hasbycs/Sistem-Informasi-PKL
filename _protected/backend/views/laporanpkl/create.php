<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Laporanpkl */

$this->title = Yii::t('app', 'Create Laporanpkl');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Laporanpkls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporanpkl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
