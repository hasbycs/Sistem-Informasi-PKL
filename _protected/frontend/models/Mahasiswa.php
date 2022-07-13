<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $mhs_id
 * @property string $mhs_bp
 * @property string $mhs_nama
 * @property string $mhs_tempat_lahir
 * @property string $mhs_tgl_lahir
 * @property string $mhs_prodi
 * @property string $mhs_jurusan
 * @property string $mhs_email
 * @property string $mhs_notelp
 *
 * @property Datapembimbingpenguji $datapembimbingpenguji
 * @property Pendaftaran $pendaftaran
 * @property Sidang $sidang
 * @property TmptMhsPkl $tmptMhsPkl
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mhs_bp', 'mhs_nama', 'mhs_tempat_lahir', 'mhs_prodi', 'mhs_jurusan', 'mhs_email', 'mhs_notelp'], 'required'],
            [['mhs_tgl_lahir'], 'safe'],
            [['mhs_bp','mhs_kelas'], 'string', 'max' => 10],
            [['mhs_nama', 'mhs_tempat_lahir', 'mhs_prodi', 'mhs_jurusan', 'mhs_email', 'mhs_notelp'], 'string', 'max' => 30],
            [['mhs_bp'], 'unique'],
            [['mhs_nama'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           
            'mhs_bp' => 'No Bp',
            'mhs_nama' => 'Nama',
            'mhs_tempat_lahir' => 'Tempat Lahir',
            'mhs_tgl_lahir' => 'Tanggal Lahir',
            'mhs_prodi' => 'Prodi',
        	'mhs_kelas' => 'Kelas',
            'mhs_jurusan' => 'Jurusan',
            'mhs_email' => 'Email',
            'mhs_notelp' => 'No Telp',
        		
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatapembimbingpenguji()
    {
        return $this->hasOne(Datapembimbingpenguji::className(), ['mahasiswa' => 'mhs_bp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftaran()
    {
        return $this->hasOne(Pendaftaran::className(), ['pd_bp' => 'mhs_bp']);
       
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSidang()
    {
        return $this->hasOne(Sidang::className(), ['s_bp' => 'mhs_bp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
}
