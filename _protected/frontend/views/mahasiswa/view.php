<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */

$this->title = $model->mhs_bp;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-view panel panel-info">
<div class="panel heading">
    <h1><?= Html::encode($this->title) ?></h1>
    </div>
<?php 
if(Yii::$app->user->identity->role==3){ ?>
        	<?= Html::a(Yii::t('app', 'Kembali'), ['/datapembimbing/index'], ['class' => 'btn btn-warning']) ?>
        	
     <?php } elseif (Yii::$app->user->identity->role==2){ ?> 
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->mhs_bp], ['class' => 'btn btn-primary']) ?>
       <?= Html::a(Yii::t('app', 'Kembali'), ['/site/index'], ['class' => 'btn btn-warning']) ?>
    </p>
		<?php }?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          
            'mhs_bp',
            'mhs_nama',
            'mhs_tempat_lahir',
            'mhs_tgl_lahir',
        	'mhs_kelas',
            'mhs_prodi',
            'mhs_jurusan',
        	'mhs_email:email',
            'mhs_notelp',
        	
        ],
    ]) ?>

</div>
