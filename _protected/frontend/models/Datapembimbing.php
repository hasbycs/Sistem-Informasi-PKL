<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datapembimbing".
 *
 * @property integer $id
 * @property string $mahasiswa
 * @property string $pembimbing
 * @property string $
 *
 * @property Dosen $pembimbing0
 * @property Mahasiswa $mahasiswa0
 */
class Datapembimbing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datapembimbing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mahasiswa', 'pembimbing','ankt_bp'], 'required'],
            [['mahasiswa'], 'string', 'max' => 10],
            [['pembimbing'], 'string', 'max' => 18],
            [['mahasiswa'], 'unique'],
            [['pembimbing'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['pembimbing' => 'dsn_nidn']],
            [['mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['mahasiswa' => 'mhs_bp']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mahasiswa' => 'Mahasiswa',
            'pembimbing' => 'Pembimbing',
        	'ankt_bp'=>'Angkatan'
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPembimbing0()
    {
        return $this->hasOne(Dosen::className(), ['dsn_nidn' => 'pembimbing']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa0()
    {
        return $this->hasOne(Mahasiswa::className(), ['mhs_bp' => 'mahasiswa']);
    }
    public function getAnk()
    {
    	return $this->hasOne(Tahunbp::className(), ['mhs_tahun' => 'angkatan']);
    }
  
}
