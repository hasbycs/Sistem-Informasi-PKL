<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\sidang;


$this->title = 'Rekap Data Jadwal Sidang';

?>
<div class="panel panel-info">
       <div class="panel-heading">
        <div class="header">
            <table style="width: 100%">
                <tr>
                    
                    <td style="text-align: center">
                        <p> <h3> DAFTAR JADWAL SIDANG PKL </h3>
                            <h4>PROGRAM STUDI ADMINISTRASI BISNIS </h4>
                            <h5> JURUSAN ADMINISTRASI NIAGA</h5>
                            
                    </td>
                </tr>
            </table>
    </div>
    </div>
    <div class="panel-body">
                        
                            <table class="table table-striped table-condensed" center style="width: 100%;" align="center" border="1" >
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%">No</th>                                          
                                            <th class="text-center"  >Mahasiswa</th>
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
                                       foreach ($data as $model){
                                       	$no++;
                                         ?>
                                         <tr class="odd gradeX">
                                         <td><?php echo $no?></td>                                          
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

</div>


   