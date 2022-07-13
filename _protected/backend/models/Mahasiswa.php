<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 
 
 * @property string $mhs_bp
 * @property string $mhs_nama
 * @property string $mhs_tempat_lahir
 * @property string $mhs_tgl_lahir
 * @property string $mhs_prodi
 * @property string $mhs_jurusan
 * @property string $mhs_email
 * @property string $mhs_notelp
 *
 * @property Sidang $sidang
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
            [['mhs_bp','mhs_nama'], 'required'],
    		//[['mhs_bp', 'mhs_nama', 'mhs_tempat_lahir', 'mhs_tgl_lahir', 'mhs_prodi', 'mhs_jurusan', 'mhs_email', 'mhs_notelp'], 'required'],
    		[['mhs_tahun'],'string','max'=>4],
    		[['mhs_tgl_lahir'], 'safe'],
            [['mhs_bp','mhs_kelas'], 'string', 'max' => 10],
    		[['mhs_nama'], 'string', 'max' => 50],
            [['mhs_tempat_lahir', 'mhs_prodi', 'mhs_jurusan', 'mhs_email', 'mhs_notelp'], 'string', 'max' => 30],
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
            
            'mhs_bp' => 'No BP',
        	'mhs_kelas'=>'Kelas',
            'mhs_nama' => 'Nama Mahasiswa',
        	'mhs_kelas'=>'Kelas',
            'mhs_tempat_lahir' => 'Tempat Lahir',
            'mhs_tgl_lahir' => 'Tanggal Lahir',
            'mhs_prodi' => 'Prodi',
            'mhs_jurusan' => 'Jurusan',
        	'mhs_tahun'=>'Angkatan',
            'mhs_email' => 'Email',
            'mhs_notelp' => 'No Telp',
        	
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSidang()
    {
        return $this->hasOne(Sidang::className(), ['s_bp' => 'mhs_id']);
    }
}
