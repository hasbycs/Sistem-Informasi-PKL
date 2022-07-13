<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\sidang;


$this->title = 'asdasd';
?>
<!DOCTYPE html>
<html>
<head>
    <title> CSS </title>
</head>
<body style="font-size: 14px;">
  
        <div class="header">
            <table style="width: 100%">
                <tr>
                    
                    <td style="text-align: center">
                        <p> <h3> DAFTAR JADWAL SIDANG PKL </h3>
                            <h4>PROGRAM STUDI ADMINISTRASI BISNIS </h4>
                            <h5> JURUSAN ADMINISTRASI NIAGA</h5>
                            <h5><?php echo date(Y)?></h5>
                    </td>
                </tr>
            </table>
    </div><hr/>
   
    <div class="panel-body">                       
                              <table border="1" cellpadding="0" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%">No</th>                                          
                                            <th class="text-center" width="25%" >Mahasiswa</th>
                                            <th class="text-center" >Tanggal</th>
                                            <th class="text-center"  >Ruang</th>
                                            <th class="text-center" >Jam</th>
                                            <th class="text-center" >pembimbing</th>
                                            <th class="text-center" >Penguji</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                       $no=0;
                                       foreach ($model as $model){
                                       	$no++;
                                         ?>
                                         <tr class="odd gradeX">
                                         <td><?php echo $no?></td>                                          
                                         <td><?php echo $model['mhs_nama'];  ?></td>
                                         <td><?php echo $model['s_tgl_sidang'];  ?></td>
                                         <td><?php echo $model['s_ruang'];  ?></td>
                                         <td><?php echo $model['s_jam']; echo '-'; echo $model['s_jam2'];   ?></td>
                                         <td><?php echo $model['s_pembimbing'];  ?></td>
                                         <td><?php echo $model['dsn_nama'];  ?></td>
                                                                                                     
                                         </tr> 
                                         <?php
                                       }                                      
                                       ?>
                           		</tbody>
                                </table>
  </div>




   <?php /* ?>
    <div>
            <table border="6px">
        <?php  foreach($model as $model){
    ?>
            <tr> <td> NAMA </td> <td  width="430px"> : <?php echo $model['mahasiswa']?> </td> 
                 <td> Kelas </td> <td> : <?php echo $model['pembimbing'] ?></td></tr>
            <tr> <td> NISN </td><td  width="430px"> : <?php echo $model['']?> </td> 
                <?php }?>
        </table>
        
    </div>
    
    
    <div>
        <table style="border: 1px; padding-top: 10px;">
            <tr style="border:1px;">
                <td align="center" width="80px"><b> Nama Mahasiswa </b></td>
                <td align="center" width="200px"><b> Dosen Pembimbing </b></td>
                <td align="center" width="80px"><b> Dosen  </b></td>
               
            </tr>
            <?php foreach($model as $model) { ?>
                <tr>
                <td align="center" width="80px"> <?php echo $model['mahasiswa']?> </td>
                <td width="200px"> <?php echo $model['pembimbing']?> </td>
                <td align="center" width="100px"> <?php echo $model['']; ?> </td>
               
                </tr>
            <?php } ?>
        </table>
    </div>
*/ ?>