<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pendaftaran */

$this->title = 'Pendaftaran PKL';
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-create">
 <?= $this->render('_formadmin', [
        'model' => $model,
    ]) ?> 
</div>
