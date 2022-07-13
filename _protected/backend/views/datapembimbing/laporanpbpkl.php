<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\datapembimbing;


$this->title = 'Data Pembimbing PKL';
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
                        <p> <h3> DAFTAR PEMBIMBING PKL MAHASISWA </h3>
                            <h4>PROGRAM STUDI ADMINISTRASI BISNIS </h4>
                            <h5> JURUSAN ADMINISTRASI NIAGA</h5>
                            <h5><?php echo date(Y)?></h5>
                    </td>
                </tr>
            </table>
    </div><hr/>
    <div class="bg">
        <p> <h3>  </h3>
    </div>
    <div class="panel-body">
                        
                              <table border="1" cellpadding="0" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%">No</th>                                          
                                            <th class="text-center" >Mahasiswa</th>
                                            <th class="text-center" width="30%">Dosen Pembimbing</th>
                                            
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
                                         <td><?php echo $model['dsn_nama'];  ?></td>
                                                                                                     
                                         </tr> 
                                         <?php
                                       }                                      
                                       ?>
                           		</tbody>
                                </table>
  </div>
