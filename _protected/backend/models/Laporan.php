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
class Laporan  extends Model{
    //put your code here
    
    public $tahun;
    public $dariTgl;
    public $sampaiTgl;
            
    function rules() {
        return [
            [['tahun'],'required']
        ];
    }
    
    function attributeLabels() {
        return [
            'tahun'=>'Tahun',
            
        ];
    }
}
