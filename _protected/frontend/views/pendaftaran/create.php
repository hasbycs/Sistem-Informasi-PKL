<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Pendaftaran */

$this->title = 'Pendaftaran Praktek Kerja Lapangan';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pendaftaran'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-create">

	
    <h3>  <i class="fa-plus-square"></i><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    	
    ]) ?>

</div>
