<?php
use frontend\assets\AppAsset;
/* @var $this yii\web\View */

$this->title = 'SI PKL';
?>
<div class="site-index" >
      
      <div class="box box-warning">
          <div class="box-header with-border">
            <h2 class="box-title">SISTEM INFORMASI PRAKTEK KERJA LAPANGAN</h2>
          </div>
          <div class="box-body">
           <h4>Program Studi Administrasi Bisnis</h4>
          </div>
          <!-- /.box-body -->
        </div>

	<?php if (Yii::$app->user->isGuest) { ?>
       <p class="lead">Silahkan Datarkan Akun Anda</p>
	
       <p><a class="btn btn-default"  href="<?php echo \yii\helpers\Url::to(['signup']); ?>">pendaftaran akun >></a></p>      
      <?php } ?>  


<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Daftarkan Tempat PKL</h4>
				<p>Silahkan Mendaftar</p>
              
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  href="<?php echo \yii\helpers\Url::to(['/pendaftaran/create']);?> " class="small-box-footer">Daftar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4> Data Dosen Pembimbing</h4>

              <p>Praktek Kerja Lapangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo \yii\helpers\Url::to(['/datapembimbing/index']);?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
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
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Data Perusahaan & Instansi</h4>
				<p>Praktek Kerja Lapangan</p>
              
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  href="<?php echo \yii\helpers\Url::to(['/tempatpkl/index']);?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

<section class="content">
      
        
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Menu Cetak !</h3>
          </div>
          <div class="box-body">
          <div class="callout callout-danger">
          <h4>Petunjuk!</h4>
          <p>1. Mahasiswa Diwajibkan untuk mendaftarkan tempat Praktek Kerja Lapangan pada link  <a href="<?php echo \yii\helpers\Url::to(['/pendaftaran/create']);?>">Daftarkan Tempat PKL.</br></a> 
            2. Pastikan Administrasi telah menetapkan dosen pembimbing. Mahasiswa bisa menemui dosen pembimbing sebelum berangkat ke tempat PKL.<br>
            3. Setelah selesai PKL mahasiswa harus masukkan judul laporan PKL, agar bisa mencetak Lembaran Asistensi Laporan PKL.</br>
            4. Pastikan Administrasi telah menetapkan jadwal sidang.</br>
            5. Kemudian mahasiswa bisa mencetak blanko persyaratan sidan PKL.
            
            </p>
        </div>
            	<a class="btn bg-olive btn-flat margin "  href="<?php echo \yii\helpers\Url::to(['/laporanpkl']);?>">Masukkan Judul Laporan</a>			
					<a class="btn bg-navy btn-flat margin"  href="<?php echo \yii\helpers\Url::to(['/pendaftaran/cetakbimbingan']);?>">Lembaran Asistensi Laporan PKL </a>
					<a class="btn bg-maroon btn-flat margin"  href="<?php echo \yii\helpers\Url::to(['/pendaftaran/cetakblanko']);?>">Blanko Persyaratan Sidang</a>
					
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      
</div>
