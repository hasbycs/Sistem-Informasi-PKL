<?php

namespace backend\models;

use Yii;
use backend\models\Mahasiswa;
/**
 * This is the model class for table "laporanpkl".
 *
 * @property string $bp
 * @property string $judul
 */
class Laporanpkl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'laporanpkl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bp', 'judul'], 'required'],
            [['bp'], 'string', 'max' => 10],
            [['judul'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bp' => Yii::t('app', 'Bp'),
            'judul' => Yii::t('app', 'Judul'),
        ];
    }
    public function getNama(){
    	return $this->hasOne(Mahasiswa::className(),['mhs_bp'=>'bp']);
    }
}
