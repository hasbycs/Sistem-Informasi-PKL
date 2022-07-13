<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\datapembimbing;

?>
<style>
    #laporan-page .tbl-label td{
        border: none;
        padding: 0px;
    }
    #laporan-page h4{
        text-align: center;
       
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
   							<h3 align="center"> DAFTAR PEMBIMBING PKL MAHASISWA </h3>
                            <h4 align="center">PROGRAM STUDI ADMINISTRASI BISNIS </h4>
                            <h4 align="center"> JURUSAN ADMINISTRASI NIAGA</h4>
    <br/>
    
    <table id="tbl-preview" style="width: 750px;">
        <thead>
            <tr>
                <th style="width: 30px;">No</th>
                <th  style="width: 200px;">Nama </th>
                <th style="width: 200px;">Dosen Pembimbing</th>
            </tr>
        </thead>
        <tbody>
           <?php
            $no = 1;           
            foreach ($data as $value) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td ><?php echo $value['mhs_nama']; ?></td>
                    <td><?php echo $value['dsn_nama']; ?></td>
                 </tr>                
            <?php                
            }
            ?>
        </tbody>
    </table>
</div>