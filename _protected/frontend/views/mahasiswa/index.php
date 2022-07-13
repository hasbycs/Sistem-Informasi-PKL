<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
	        'mhs_bp',
            'mhs_nama',
            'mhs_tempat_lahir',
            'mhs_tgl_lahir',
        	'mhs_kelas',
            'mhs_prodi',
            'mhs_jurusan',
            // 'mhs_email:email',
            // 'mhs_notelp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
