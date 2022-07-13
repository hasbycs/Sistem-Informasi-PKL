<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use frontend\assets\AppAsset;

$this->title = 'Formulir Kelengkapan Sidang';
?>
<style>
    #blanko-page .jud td{
        border: none;
        padding: 2px;
        font-size: 13pt;
        margin-top: 9pt;
    }
   
    #heade{
        border: 1px solid ;
        background-color: white;
        border-collapse: collapse;
        font-size: 16;
       
    }
     #check{
        border: 0.5pt solid ;
        padding: 5px;
        background-color: white;
        border-collapse: collapse;
        font-size: 12pt;
        margin-bottom:170px;
        
    }
    #tab{
    	
        border: 0.5pt solid ;
        background-color: white;
        border-collapse: collapse;
        font-size: 9pt;       
    }
   
    #tab th{
    
        text-align: center;
        font-weight: bold;
        border: 0.5pt solid ;
        
      
    }
    #heade th,td{
        border: 1px solid;
        padding: 3px;
    }
</style>
 
 <div id="blanko-page"> 
            
  <table id="heade" style="width: 100%">
    <tr> 
      <td width="15%" height="90" style="text-align: center"> <?php
        echo Html::img(AppAsset::register($this)->baseUrl . '/images/logo-poli.png', ['style' => 'width:79px;']);
        ?></td>
      <td width="85%" style="text-align: center"><p><font >KEMENTRIAN 
          RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</font></p>
        <p><font face="Arial, Helvetica, sans-serif">POLITEKNIK NEGERI PADANG</font></p>
        <p><font  face="Arial"><strong>JURUSAN ADMINISTRASI NIAGA</strong></font></p></td>
    </tr>
    <tr> 
      <td height="10px" colspan="2" style="text-align: center"><font  face="Arial"><strong>FORMULIR</strong></font></td>
    </tr>
    <tr> 
      <td height="55" colspan="2" style="text-align: center"> 
        <p> <font face="Arial">PEMERIKASAAN KELENGKAPAN PERSYARATAN SIDANG PRAKTEK 
          KERJA LAPANGAN</font></p> </td>
    </tr>
  </table>
    
     
<table class="jud" >  
    <tr>
        <td width="25%">Nama</td>
        <td width="3%">:</td>
      	<td width="72%"><?php
            foreach ($model as $model) {
        ?>       
            <?php  echo $model['mhs_nama']; ?> </td>
        </tr>
	<tr>
        <td width="25%">No. BP</td>
        <td width="3%">:</td>
      <td width="72%"><?php echo $model['mahasiswa']; ?></td>
	</tr>       
	<tr>       
      <td width="25%">Judul Laporan PKL</td>
        <td width="3%">:</td>
        <td width="72%"> <?php echo $model['judul'];?></td>
	</tr>
	<tr>
        <td width="25%">Pembimbing</td>
        <td width="3%">:</td>
      <td width="72%"><?php echo $model['dsn_nama'];} ?></td>
	</tr>    
</table>


  <p>&nbsp;</p>
  <table id="check" align="center" width="94%" cellpadding="3" cellspacing="0">
    <tr> 
      <td><div align="center">No</div></td>
      <td><div align="center">Check List</div></td>
      <td><div align="center">Kelengkapan</div></td>
      <td><div align="center">Banyaknya</div></td>
    </tr>
    <tr> 
      <td>1.</td>
      <td>&nbsp;</td>
      <td>Laporan PKL</td>
      <td>1 rangkap</td>
    </tr>
    <tr> 
      <td width="5%">2.</td>
      <td width="14%">&nbsp;</td>
      <td width="56%">Foto Copy Lembaran Asistensi</td>
      <td width="25%">1 Lembar</td>
    </tr>
    <tr> 
      <td width="5%">3.</td>
      <td width="14%">&nbsp;</td>
      <td width="56%">Foto warna 3x4</td>
      <td width="25%">1 Lembar </td>
    </tr>
    <tr> 
      <td width="5%">4.</td>
      <td width="14%">&nbsp;</td>
      <td width="56%">Buku PKL yang telah di tanda tangani Industri/ Perusahaan 
        tempat PKL
      <td width="25%">1 eksemplar</tr>
    <tr> 
      <td>5.</td>
      <td>&nbsp;</td>
      <td>Nilai PKL/Surat Keterangan Telah Selesai PKL dari Industri</td>
      <td>1 eksemplar</td>
    </tr>
    <tr> 
      <td>6.</td>
      <td>&nbsp;</td>
      <td>Permohonan Sidang PKL</td>
      <td>1 eksemplar</td>
    </tr>
    <tr> 
      <td width="5%">7.</td>
      <td width="14%">&nbsp;</td>
      <td width="56%">Stopmap Folio</td>
      <td width="25%">1 buah</td>
    </tr>
  </table>
  

  <p>*Di check list yang telah dilengkapi</p>
   
  <table id="tab" style = "width:100%;" >
    
    
    <tr> 
      <th colspan="2" width=276px; >Dibuat</th>
      <th colspan="2" width=276px;>Diperiksa</th>
      <th colspan="2" width=276px;>Disetujui</th>
    </tr>
    
   
    <tr> 
      <td width="13%">Tanggal</td>
      <td width="20%" >&nbsp;</td>
      <td width="13%">Tanggal</td>
      <td width="20%">&nbsp;</td>
      <td width="13%">Tanggal</td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Oleh</td>
      <td width= 20% >&nbsp;</td>
      <td>Oleh</td>
      <td>&nbsp;</td>
      <td>Oleh</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Jabatan</td>
      <td width= 20% >Adm</td>
      <td>Jabatan</td>
      <td>Ka. Prodi Adm. Bisnis</td>
      <td>Jabatan</td>
      <td>Ketua Jurusan</td>
    </tr>
    <tr > 
      <th height="100px" >Tanda Tangan</th>
      <th height="100px" >&nbsp;</th>
      <th height="100px">Tanda Tangan</th>
      <th height="100px" ></th>
      <th height="100px" >Tanda Tangan</th>
      <th height="100px" ></th>
      </tr>

  </table>
</div>