<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property integer $dsn_id
 * @property string $dsn_nip
 * @property string $dsn_nama
 * @property string $dsn_notelp
 * @property string $dsn_email
 *
 * @property Sidang[] $sidangs
 * @property Sidang[] $sidangs0
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dsn_nip','dsn_nidn','dsn_nama'], 'required'],
        	[['dsn_nip'],'string','max'=>30],
        	
        	[['dsn_nidn'],'string','max'=>10],
            [[ 'dsn_nama', 'dsn_email'], 'string', 'max' => 70],
            [['dsn_notelp'], 'string', 'max' => 15],
        	
            [['dsn_nip','dsn_nidn'], 'unique'],
            [['dsn_nama'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           
            'dsn_nip' => 'Nip',
            'dsn_nama' => 'Nama Dosen',
            'dsn_notelp' => 'No Telp',
            'dsn_email' => 'Email',
        	'dsn_nidn'=>'NIDN'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSidangs0()
    {
        return $this->hasMany(Sidang::className(), ['s_penguji' => 'dsn_id']);
    }
}
