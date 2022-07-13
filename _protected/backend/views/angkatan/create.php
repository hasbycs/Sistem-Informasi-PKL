<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Angkatan */

$this->title = Yii::t('app', 'Tambah Data periode Kaprodi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Angkatans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angkatan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
