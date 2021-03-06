<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class CsvForm extends Model{
public $file;

public function rules(){
	return [
[['file'],'required'],
[['file'],'file','extensions'=>'csv','maxSize'=>1024 * 1024 * 5],
];
}

public function attributeLabels(){
return [
'file'=>'File',
];
}
}