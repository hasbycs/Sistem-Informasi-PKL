<?php

namespace backend\controllers;

use Yii;
use yii\web\UploadedFile;
use backend\models\Mahasiswa;
use backend\models\MahasiswaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use PHPExcel_IOFactory;
use backend\models\CsvForm;

/**
 * MahasiswaController implements the CRUD actions for Mahasiswa model.
 */
class MahasiswaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        		'access'=>[
        				'class'=>AccessControl::className(),
        				'rules'=>[
        						[
        								'actions'=>['index','lists','create','update','delete','view','upload'],
        								'allow'=>true,
        								'matchCallback'=>function(){
        								return (Yii::$app->user->identity->role==1);}
        								],
        						],
        						],
     		
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionLists($id)
    {
    	$countMaha=Mahasiswa::find()
    		->where(['mhs_tahun'=>$id])
    		->count();
    	$maha=Mahasiswa::find()
	    	->where(['mhs_tahun'=>$id])
	    	->all();
	    	if($countMaha > 0)
	    	{
	    		foreach($maha as $mah){
	    			echo "<option value='".$mah->mhs_bp."'>".$mah->mhs_nama."</option>";
	    		}
	    	}
	    	else{
	    		echo "<option> - </option>";
	    	}
    }
    
    /**
     * Lists all Mahasiswa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MahasiswaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = new Mahasiswa();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	return $this->redirect(['view', 'id' => $model->mhs_bp]);
        } else {
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        	'model' => $model,
        ]);
        }
    }
   
    /**
     * Displays a single Mahasiswa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mahasiswa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
    	$model = new Mahasiswa();
   	
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            	'bp'=>null,
            ]);
        }
    	}
     

    /**
     * Updates an existing Mahasiswa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
    	
    	
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }}
    

    /**
     * Deletes an existing Mahasiswa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mahasiswa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mahasiswa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mahasiswa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionUpload(){
			$model = new CsvForm;
			if($model->load(Yii::$app->request->post())){
				$file = UploadedFile::getInstance($model,'file');
				$filename = 'Data.'.$file->extension;
				$upload = $file->saveAs('uploads/'.$filename);
				if($upload){
					define('CSV_PATH','uploads/');
					$csv_file = CSV_PATH . $filename;
					$filecsv = file($csv_file);
					print_r($filecsv);
					foreach($filecsv as $data){
						$modelnew = new Mahasiswa;
						$hasil = explode(",",$data);
						$bp = $hasil[0];
						$nama = $hasil[1];
						$kelas=$hasil[2];
						$tempat = $hasil[3];
						$tanggal = $hasil[4];
						$prodi = $hasil[5];						
						$jurusan = $hasil[6];
						$tahun=$hasil[7];
						$email = $hasil[8];
						$notelp = $hasil[9];
						
						$modelnew->mhs_bp = $bp;
						$modelnew->mhs_nama = $nama;
						$modelnew->mhs_kelas = $kelas;
						$modelnew->mhs_tempat_lahir = $tempat;
						$modelnew->mhs_tgl_lahir = $tanggal;
						$modelnew->mhs_prodi = $prodi;						
						$modelnew->mhs_jurusan = $jurusan;
						$modelnew->mhs_tahun = $tahun;
						$modelnew->mhs_email = $email;
						$modelnew->mhs_notelp = $notelp;
						$modelnew->save();
						}
							unlink('uploads/'.$filename);
							return $this->redirect(['mahasiswa/index']);
						}
			}else{
				 return $this->render('upload',['model'=>$model]);
				}
				    }

}
