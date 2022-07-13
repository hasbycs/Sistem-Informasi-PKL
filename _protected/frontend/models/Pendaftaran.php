<?php

namespace frontend\models;

use Yii;
use backend\models\Tahunbp;
use backend\models\Angkatan;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property integer $pd_id
 * @property string $pd_bp
 * @property string $pd_nama
 
 * @property integer $pd_instansi
 * @property string $pd_tgl_mulai
 * @property string $pd_tgl_selesai
 * @property integer $pd_dosen
 * @property string $pd_pbblap
 * @property integer $tahun
 *
 * @property Dosen $pdDosen
 * @property Mahasiswa $pdBp
 * @property Tempatpkl $pdInstansi
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pd_bp', 'pd_instansi', 'tahun'], 'required'],
            [['pd_instansi', 'tahun'], 'integer'],
            [['pd_tgl_mulai', 'pd_tgl_selesai'], 'safe'],
            [['pd_bp'], 'string', 'max' => 10],        
            [['pd_pbblap'], 'string', 'max' => 30],
            [['pd_bp'], 'unique'],
            //[['pd_dosen'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['pd_dosen' => 'dsn_id']],
            [['pd_bp'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['pd_bp' => 'mhs_bp']],
            [['pd_instansi'], 'exist', 'skipOnError' => true, 'targetClass' => Tempatpkl::className(), 'targetAttribute' => ['pd_instansi' => 'p_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        		'pd_id' => 'ID',
        		'pd_bp' => 'No BP',
        		//'pd_nama'=> 'Nama',
        		
        		'pd_instansi' => 'Instansi / Perusahaan',
        		'pd_tgl_mulai' => 'Tanggal Mulai PKL',
        		'pd_tgl_selesai' => 'Tanggal Selesai PKL',
        		//'pd_dosen' => 'Dosen Pembimbing',
        		'pd_pbblap' => 'Pembimbing Lapangan',
        		'tahun'=>'tahun'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   // public function getPd_dosen0()
  //  {
  //  	return $this->hasOne(Dosen::className(), ['dsn_id' => 'pd_dosen']);
 //   }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa0()
    {
    	return $this->hasOne(Mahasiswa::className(), ['mhs_bp' => 'pd_bp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPd_instansi0()
    {
    	return $this->hasOne(Tempatpkl::className(), ['p_id' => 'pd_instansi']);
    }
    public function getTah()
    {
    	return $this->hasOne(Angkatan::className(), ['id' => 'tahun']);
    }
}
