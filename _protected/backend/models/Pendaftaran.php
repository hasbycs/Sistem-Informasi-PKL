<?php

namespace backend\models;

use Yii;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\web\Controller;
use backend\models\Mahasiswa;
use backend\models\Datapembimbing;
use backend\models\Dosen;
use backend\models\Angkatan;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property integer $pd_id
 * @property string $pd_bp
 
 * @property integer $pd_instansi
 * @property string $pd_tgl_mulai
 * @property string $pd_tgl_selesai

 * @property string $pd_pbblap
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
            [['pd_bp', 'pd_instansi'], 'required'],
            [['pd_instansi','tahun'], 'integer'],
            [['pd_tgl_mulai', 'pd_tgl_selesai'], 'safe'],
            [['pd_bp'], 'string', 'max' => 10],
            [['pd_pbblap'], 'string', 'max' => 30],
            [['pd_bp'], 'unique'],
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
            'pd_id' => 'Id',
            'pd_bp' => 'BP',
        	'nama'=>'Nama',
            'kelas'=>'Kelas',
            'pd_instansi' => 'Instansi / Perusahaan',
            'pd_tgl_mulai' => 'Mulai',
            'pd_tgl_selesai' => 'Selesai',        
            'pd_pbblap' => 'Pembimbing Lapangan',
        	'tahun' => 'Tahun',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
 //   public function getPdDosen()
  //  {
  //      return $this->hasOne(Dosen::className(), ['dsn_id' => 'pd_dosen'])->inverseOf('pendaftarans');
  //  }

    public function actionGetmahasiswa(){
    	if(Yii::$app->request->isAjax){
    		$id=isset ($_GET['id'])? $_GET['id']:'';
    		$mahasiswa=(new Query())
    		->select(['*'])
    		->from("mahasiswa")
    		->where(['mhs_bp'=>$id])
    		->one();
    		$data=[
    				'nama'=>$mahasiswa['mhs_nama'],
    				
    		];
    		return Json::encode($data);}
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPdBp()
    {
        return $this->hasOne(Mahasiswa::className(), ['mhs_bp' => 'pd_bp'])->inverseOf('pendaftaran');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    //public function getPdInstansi()
    //{
    //    return $this->hasOne(Tempatpkl::className(), ['p_id' => 'pd_instansi'])->inverseOf('pendaftarans');
   // }
//    public function getPd_dosen0()
 //   {
 //   	return $this->hasOne(Dosen::className(), ['dsn_id' => 'pd_dosen']);
 //   }
    
    public function getPd_instansi0()
    {
    	return $this->hasOne(Tempatpkl::className(), ['p_id' => 'pd_instansi']);
    }
    public function getDatapem(){
    	return $this->hasOne(Datapembimbing::className(),['mahasiswa'=>'pd_bp']);
 	 }
// 	 public function getDatapem(){
// 	 	return $this->hasOne(Dosen::className(),['dsn_nip'=>'pembimbing']);
// 	 }
    public function getMahasiswa0()
    {
    	return $this->hasOne(Mahasiswa::className(), ['mhs_bp' => 'pd_bp']);
    }
    public function getAng()
    {
    	return $this->hasOne(Angkatan::className(), ['id' => 'tahun']);
    }
}
