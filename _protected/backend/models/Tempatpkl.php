<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tempatpkl".
 *
 * @property integer $p_id
 * @property string $p_nama
 * @property integer $p_provinsi
 * @property string $p_alamat
 * @property string $p_email
 * @property string $p_notelp
 *
 * @property Pendaftaran[] $pendaftarans
 * @property Sidang[] $sidangs
 * @property Provinsi $pProvinsi
 * @property TmptMhsPkl[] $tmptMhsPkls
 */
class Tempatpkl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tempatpkl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_nama', 'p_alamat'], 'required'],
            [['p_provinsi'], 'integer'],
            [['p_alamat'], 'string'],
            [['p_nama', 'p_email'], 'string', 'max' => 70],
            [['p_notelp'], 'string', 'max' => 50],
            [['p_provinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['p_provinsi' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'ID',
            'p_nama' => 'Nama Instansi/Perusahaan',
            'p_provinsi' => 'Provinsi',
            'p_alamat' => 'Alamat Lengkap',
            'p_email' => 'Email',
            'p_notelp' => 'No Telepon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftarans()
    {
        return $this->hasMany(Pendaftaran::className(), ['pd_instansi' => 'p_id'])->inverseOf('pdInstansi');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ['id' => 'p_provinsi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   
}
