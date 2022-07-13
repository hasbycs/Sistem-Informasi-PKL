<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Provinsi */

$this->title = 'Tambah Data Provinsi';
$this->params['breadcrumbs'][] = ['label' => 'Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provinsi-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
