<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kelas */

$this->title = Yii::t('app', 'Isi Data Kelas !');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kelas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
