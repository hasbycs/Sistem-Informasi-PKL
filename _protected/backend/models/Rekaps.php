<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * Description of Laporan
 *

 */
class Rekaps  extends Model{
    //put your code here
    
    public $tahun;
    public $kelas;
    public $dariTgl;
    public $sampaiTgl;
            
    function rules() {
        return [
            [['tahun','kelas'],'required']
        ];
    }
    
    function attributeLabels() {
        return [
            'tahun'=>'Tahun',
        	'kelas'=>'Kelas'
            
        ];
    }
}
