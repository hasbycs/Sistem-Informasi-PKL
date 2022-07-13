<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\sidang;


$this->title = 'Jadwal Sidang';
?>
<style>
    #laporan-page .tbl-label td{
        border: none;
        padding: 0px;
    }
   
    #tbl-preview{
        border: 1px solid #CC0000;
        background-color: white;
        border-collapse: collapse;
    }
    #tbl-preview th{
        text-align: center;
        font-weight: bold;
        background-color: #cccccc;
    }
    #tbl-preview th,td{
        border: 1px solid;
        padding: 5px;
    }
</style>

<div id="laporan-page">
   							<p align="center">DAFTAR JADWAL SIDANG PKL </p>
                            <p align="center">PROGRAM STUDI ADMINISTRASI BISNIS </p>
                            <p align="center"> JURUSAN ADMINISTRASI NIAGA</p>
    <br/>
    
               <?php if ($kel == null){?>
               	<tr>
                <td>Tahun</td><th> : </th><td><?php echo $tah->tahun; ?></td></tr> <?php } else{?>              
               	<tr>
                <td>Tahun</td><th> : </th><td><?php echo $tah->tahun; ?></td></tr><br/>
                <tr>
                <td>Kelas</td><th> : </th><td><?php echo $kel->kls; ?></td>                
                <?php }?>
                </tr>
          
    <table id="tbl-preview" style="width: 750px;">
        <thead>
            <tr>
                <th style="width: 30px;">No</th>
                <th  style="width: 200px;">Nama </th>
                <th style="width: 90px;">Tanggal</th>
                 <th style="width: 50px;">Ruang</th>
                  <th style="width: 160px;">Jam</th>
                   <th style="width: 200px;">pembimbing</th>
                    <th style="width: 200px;">Penguji</th>
            </tr>
        </thead>
        <tbody>
           <?php
            $no=1;           
            foreach ($data as $model) {
                ?>
                <tr>
                     <td><?php echo $no++?></td>                                          
                     <td><?php echo $model['mhs_nama'];  ?></td>
                     <td><?php echo $model['s_tgl_sidang'];  ?></td>
                     <td><?php echo $model['noLokal'];  ?></td>
                     <td><?php echo $model['s_jam'];  ?> - <?php echo $model['s_jam2'];  ?></td>
                     <td><?php echo $model['s_pembimbing'];  ?></td>
                     <td><?php echo $model['dsn_nama'];  ?></td>
                 </tr>                
            <?php                
            }
            ?>
        </tbody>
    </table>
</div>  
  