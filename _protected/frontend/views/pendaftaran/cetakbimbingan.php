<?php

use yii\helpers\Html;

use frontend\assets\AppAsset;

$this->title = 'Asistensi PKL';
?>
<style>
   
   
    #bimbingan-page .heade{
        border: 1px solid ;
        background-color: white;
        border-collapse: collapse;
        
    }
    
     #bimbingan-page .ttd{        
        background-color: white;
        width:100%;
         font-size: 16pt;
        margin-top: 10px;
    }
    #head td tr{
    border: 1px solid ;
    
    }
     #nama{
        border: 0.5pt solid ;
         padding: 2px;
         margin-top:8px;
        background-color: white;
        border-collapse: collapse;
         font-size: 10pt;}
     #uraian{
     	margin-top:10px;
        border: 0.5pt solid ;
        padding: 1px;
        background-color: white;
        border-collapse: collapse;
         font-size: 11pt; }    
    
   
    #nama td{    
        text-align: left;       
       	border: 1px solid;
        padding: 1px;
        font-size: 10pt;           
    }
    #uraian th{
        border: 1px solid;
        padding: 3px;
        font-size: 9pt;
    }
</style>

 <div id="bimbingan-page">
  
   <table class="heade" border="1" style="width: 100%">
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
      <td height="8" colspan="2" style="text-align: center"><font  face="Arial"><strong>FORMULIR</strong></font></td>
    </tr>
    <tr> 
      <td height="55" colspan="2" style="text-align: center;"> 
        <p> <font face="Arial">LEMBARAN ASISTENSI 
          LAPORAN PRAKTEK KERJA LAPANGAN (PKL) MAHASISWA</font></p> </td>
    </tr>
  </table>

  <table  id="nama" width="100%" >
    <tr> 
      <td width="27%">NAMA MAHASISWA</td>
      <td width="73%"> <?php
            foreach ($model as $model) {
        ?>       
            <?php  echo $model['mhs_nama']; ?> </td>
    </tr>
    <tr> 
      <td width="27%">BP</td>
      <td width="73%"> <?php echo $model['mahasiswa']; ?> </td>
    </tr>
    <tr> 
      <td width="27%">PROGRAM STUDI</td>
      <td width="73%"> <?php echo $model['mhs_prodi']; ?></td> </tr>
    <tr> 
      <td>PEMBIMBING</td>
      <td> <?php echo $model['dsn_nama']; ?> </td>
    </tr>
    <tr> 
      <td width="27%" height="40"><p>JUDUL LAPORAN PKL</p>
        <p>&nbsp;</p></td>
      <td width="73%"><?php echo $model['judul']; ?> </td>
    </tr>
   <?php } ?>
</table>



<table id="uraian"  width="100%" >
  <tr> 
    <th width="6%" rowspan="2" align="center">NO</th>
    <th width="12%" rowspan="2" align="center"><p>HARI/</p> 
      <p>TANGGAL</p></th>
    <th width="60%" rowspan="2" align="center">URAIAN BIMBINGAN</th>
    <th colspan="2" align="center">PARAF</th>
  </tr>
  <tr> 
    <th width="15%" height="33" align="center">PEMBIMBING</th>
    <th align="center"width="7%">MHS</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  <tr> 
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
    <th height="33" >&nbsp;</th>
    <th>&nbsp;</th>
    <th height="33">&nbsp;</th>
  </tr>
  
</table>
 
 
 
 
 
<table class="ttd" height="207">
  <tr> 
    <td>Mengetahui,</td>
    <td>&nbsp;</td>
    <td><div align="center">Padang, </div></td>
  </tr>
  <tr> 
    <td>Ketua Prodi </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>Administrasi Bisnis</td>
    <td>Pembimbing</td>
    <td>Mahasiswa</td>
  </tr>
  <tr> 
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php foreach ($period as $period){}?>
  <tr> 
    <td height="10"><?php echo $period['dsn_nama'];?></td>
    <td>&nbsp;<?php echo $model['dsn_nama'];?></td>
    <td>&nbsp;<?php echo $model['mhs_nama'];?></td>
  </tr>
  <tr> 
    <td width="361"> NIP. <?php echo $period['kaprodi'];?> </td>
    <td width="361"> NIP. <?php echo $model['dsn_nip'];?> </td>
    <td width="373"> BP. <?php echo $model['mahasiswa'];?> </td>
  </tr>
</table> 
 
 </div>
 

<?php /* ?>

<table>
  <tr> 
    <th width="261" height="45"> 
      <div align="left"> 
        <p>Mengetahui, Ketua Prodi</p>
        <p>.........................................</p>
        <p>&nbsp;</p>
        <p>........................................</p>
        <p>NIP.</p>
      </div></th>
    <th width="251" height="45">
<div align="left">
<p>Pembimbing</p>
      <p>...................................</p>
      <p>&nbsp;</p>
        <p>...................................</p>
        <p>NIP.</p>
      </div></th>
    <th width="239"><p align="left">Mahasiswa</p>
      <p align="left">........................................</p>
      <p align="left">&nbsp;</p>
      <p align="left">.......................................</p>
      <p align="left">BP.</p>
      </th>
  </tr>
</table>
</div>
*/ ?>