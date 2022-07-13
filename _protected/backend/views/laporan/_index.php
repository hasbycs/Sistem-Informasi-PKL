<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\datapembimbing;


$this->title = 'Rekap Data Pembimbing PKL';
?>
<div class="panel panel-info">
       <div class="panel-heading">
        <div class="header">
     <table style="border-spacing: 0;border-collapse: collapse;width: 100%">
                <tr>
                    
                    <td style="text-align: center">
                        <p> <h3> DAFTAR PEMBIMBING PKL MAHASISWA </h3>
                            <h4>PROGRAM STUDI ADMINISTRASI BISNIS </h4>
                            <h5> JURUSAN ADMINISTRASI NIAGA</h5>
                            <h5><?php // foreach ($modelsDatata as $model){echo $model['tahun'];}?></h5>
                    </td>
                </tr>
            </table>
    	</div>
   </div>
    <div class="panel-body">
 <table class="table table-striped table-condensed" center style="width: 700px;" align="center" border="1" >
                                    <thead>
                                        <tr>
                                            <th class="text-center" >No</th>                                          
                                            <th class="text-center" >Mahasiswa</th>
                                            <th class="text-center">Dosen Pembimbing</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                       $no=0;
                                       foreach ($data as $model){
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
</div>



 