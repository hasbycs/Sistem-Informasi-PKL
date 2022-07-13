<?php
/* @var $this yii\web\View */
$this->title = 'Sistem Informasi Praktek Kerja Lapangan';
?>
<div class="home-index">
<section class="content">
<?= \aki\imageslider\ImageSlider::widget([
	'baseUrl' => Yii::getAlias('@web/images/'),
    'nextPerv' => true,
    'indicators' => false,		
	'width'=>'100%',
    'height' => '599px',
    'classes' => 'img-rounded',
    'images' => [
        [
            'active' => true,
            'src' => 'pnp.jpg',
            'title' => 'image',
        ],
        [
            'src' => 'pkl2.jpg',
            'title' => 'image',
    	]
    ],
]); ?>

</section>

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Mahasiswa</h4>
				<p>Data Mahasiswa</p>             
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  href="<?php echo \yii\helpers\Url::to(['/mahasiswa/index']);?> " class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>       
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4> Data Pendaftaran</h4>
              <p>Siswa yang telah Praktek Kerja Lapangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo \yii\helpers\Url::to(['/pendaftaran/index']);?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Data Pembimbing</h4>
				<p>Praktek Kerja Lapangan</p>
              
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  href="<?php echo \yii\helpers\Url::to(['/datapembimbing/index']);?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4> Jadwal sidang </h4>
              <p>Praktek Kerja Lapangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo \yii\helpers\Url::to(['/sidang/index']);?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
</div>