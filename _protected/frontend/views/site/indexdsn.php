<?php
use yii\helpers\Html;
use backend\assets\AppAsset;
/* @var $this yii\web\View */

$this->title = 'SI PKL';
?>

<div class="site-index">
<?php  Html::a('<span class="logo-mini">'.Html::img(AppAsset::register($this)
		->baseUrl.'/images/logo-poli.png',['style'=>'width:25px;margin-top:0px;']).'APP</span><span class="logo-lg">' .
		Html::img(AppAsset::register($this)->baseUrl.'/images/logo-poli.png',['style'=>'width:255px;']).Yii::$app->name . '</span>', Yii::$app->homeUrl) ?>

<?php if (Yii::$app->user->isGuest){ ?>  
     
     <section class="content">
        <div class="callout callout-info">
          <h4>SISTEM INFORMASI PRAKTEK KERJA LAPANGAN <b> Program Studi Administrasi Bisnis</b></h4>		
          <p>Paraktek Kerja Lapangan merupakan Mata Kuliah wajib untuk semester 5 (lima) Mahasiswa Program Studi Administrasi Bisnis !           
          </p>
        </div>             
	<div class="callout callout-danger">
          <h4>Cara Mendapatkan Akun !</h4>
          <p>Mahasiswa Atau Dosen yang belum mendapatkan AKUN untuk Login Silahkan mendaftarkan AKUN  <b> <a href="<?php echo \yii\helpers\Url::to(['/site/signup']);?>"> DI SINI</a></b> 
           dengan menggunakan NIDN <i>(Dosen) </i>atau No BP <i>(Mahasiswa) </i> </p>
        </div>
        </section>
      <?php }else{?>
       <h4 style="font-size: 15px;">Selamat Datang <?php echo Yii::$app->user->identity->namaLengkap; ?></h4>
       
        <div class="callout callout-info">
          <h4>SISTEM INFORMASI PRAKTEK KERJA LAPANGAN <b> Program Studi Administrasi Bisnis</b></h4>		
          <p>Paraktek Kerja Lapangan merupakan Mata Kuliah wajib untuk semester 5 (lima) Mahasiswa Program Studi Administrasi Bisnis !           
          </p>
        </div>
          <div class="body-content">

        <div class="row" align="center">
            <div class="col-lg-4">
                <h3><b>Mahasiswa</b> Bimbingan</h3>                 
                <p><a class="glyphicon glyphicon-search btn btn-block btn-success btn-lg" href="<?php echo \yii\helpers\Url::to(['/datapembimbing/']);?>">Lihat</a></p>
            </div>
            <div class="col-lg-4">
                <h3><b>Jadwal</b> Sidang</h3>
                <p></p>
				<p><a class="glyphicon glyphicon-search btn btn-block btn-success btn-lg" href="<?php echo \yii\helpers\Url::to(['/sidang/']);?>">Lihat</a></p>

            </div>
            <div class="col-lg-4">
                <h3>Data <b>Mahasiswa PKL</b></h3>
				<p><a class="glyphicon glyphicon-search btn btn-block btn-success btn-lg" href="<?php echo \yii\helpers\Url::to(['/pendaftaran/']);?>">Lihat</a></p>
                <p></p>

                
            </div>
        </div>
    </div>
</div>   
           
      <?php }?>
  
	
	<?= \aki\imageslider\ImageSlider::widget([
	'baseUrl' => Yii::getAlias('@web/images/'),
    'nextPerv' => true,
    'indicators' => false,		
	'width'=>'100%',
    'height' => '430px',
    'classes' => 'img-rounded',
    'images' => [
        [
            'active' => true,
            'src' => 'pnp3.jpg',
            'title' => 'image',
        ],
        [
            'src' => 'pkl2.jpg',
            'title' => 'image',
    	]
    ],
]); ?>

</section>

<?php if (!Yii::$app->user->isGuest) { ?>
           
   
<?php }?>