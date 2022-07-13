<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tahunbp */

$this->title = Yii::t('app', 'Create Tahunbp');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tahunbps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahunbp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
