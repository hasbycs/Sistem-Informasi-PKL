<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sidang */

$this->title = 'Tambah Data Sidang';
$this->params['breadcrumbs'][] = ['label' => 'Sidang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sidang-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
