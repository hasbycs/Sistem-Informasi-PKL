<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendaftaran */

$this->title = 'Update Pendaftaran: ' . $model->pd_bp;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pd_id, 'url' => ['view', 'id' => $model->pd_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaran-update">

   
 <?= $this->render('_formadmin', [
        'model' => $model,
    ]) ?>

    



    
</div>
