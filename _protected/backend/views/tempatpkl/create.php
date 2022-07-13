<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tempatpkl */

$this->title = 'Data Instansi / Perusahaan';
$this->params['breadcrumbs'][] = ['label' => 'Tempatpkls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempatpkl-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
