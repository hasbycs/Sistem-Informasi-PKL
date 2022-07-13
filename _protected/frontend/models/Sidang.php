<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sidang".
 *
 * @property integer $s_id
 * @property integer $s_bp
 * @property string $s_tgl_sidang
 * @property string $s_ruang
 * @property string $s_jam
 * @property integer $s_pembimbing
 * @property integer $s_penguji
 * @property integer $s_tempat_pkl
 *
 * @property Dosen $sPembimbing
 * @property Dosen $sPenguji
 * @property Mahasiswa $sBp
 * @property Tempatpkl $sTempatPkl
 */
class Sidang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sidang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_bp', 's_tgl_sidang', 's_ruang', 's_jam', 's_pembimbing', 's_penguji', 's_tempat_pkl'], 'required'],
            [['s_bp', 's_pembimbing', 's_penguji', 's_tempat_pkl'], 'integer'],
            [['s_tgl_sidang'], 'safe'],
            [['s_ruang'], 'string', 'max' => 25],
            [['s_jam','sjam2'], 'string', 'max' => 15],
            [['s_bp'], 'unique'],
            [['s_pembimbing'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['s_pembimbing' => 'dsn_id']],
            [['s_penguji'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['s_penguji' => 'dsn_id']],
            [['s_bp'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['s_bp' => 'mhs_id']],
            [['s_tempat_pkl'], 'exist', 'skipOnError' => true, 'targetClass' => Tempatpkl::className(), 'targetAttribute' => ['s_tempat_pkl' => 'p_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'ID',
            's_bp' => 'No Bp',
            's_tgl_sidang' => 'Tanggal',
            's_ruang' => 'Ruang',
            's_jam' => 'mulai',
            's_jam2'=>'selesai',
            's_pembimbing' => 'Pembimbing',
            's_penguji' => 'Penguji',
            's_tempat_pkl' => 'Tempat Pkl',
            'penguji'=>'Dosen Penguji',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSPembimbing()
    {
        return $this->hasOne(Dosen::className(), ['dsn_nidn' => 's_pembimbing']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSPenguji()
    {
        return $this->hasOne(Dosen::className(), ['dsn_nidn' => 's_penguji']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSBp()
    {
        return $this->hasOne(Mahasiswa::className(), ['mhs_bp' => 's_bp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSTempatPkl()
    {
        return $this->hasOne(Tempatpkl::className(), ['p_id' => 's_tempat_pkl']);
    }
     public function getRuang()
    {
        return $this->hasOne(Ruangsidang::className(), ['id' => 's_ruang']);
    }
}
