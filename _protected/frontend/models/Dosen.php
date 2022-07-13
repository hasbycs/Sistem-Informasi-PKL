<?php

namespace frontend\models;

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
 * @property Datapembimbingpenguji[] $datapembimbingpengujis
 * @property Pendaftaran[] $pendaftarans
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
            [['dsn_nip', 'dsn_nidn','dsn_nama', 'dsn_notelp'], 'required'],
            [['dsn_nip'], 'string', 'max' => 30],
            [['dsn_nama', 'dsn_email'], 'string', 'max' => 70],
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
            'dsn_nidn'=>'NIDN',
            'dsn_nip' => 'Nip',
            'dsn_nama' => 'Dosen',
            'dsn_notelp' => 'Notelp',
            'dsn_email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatapembimbingpengujis()
    {
        return $this->hasMany(Datapembimbingpenguji::className(), ['pembimbing' => 'dsn_nidn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftarans()
    {
        return $this->hasMany(Pendaftaran::className(), ['pd_dosen' => 'dsn_nidn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSidangs()
    {
        return $this->hasMany(Sidang::className(), ['s_pembimbing' => 'dsn_nidn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSidangs0()
    {
        return $this->hasMany(Sidang::className(), ['s_penguji' => 'dsn_nidn']);
    }
}
