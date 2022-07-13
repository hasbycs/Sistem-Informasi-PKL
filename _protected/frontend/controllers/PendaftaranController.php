<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pendaftaran;
use frontend\models\PendaftaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use mPDF;

/**
 * PendaftaranController implements the CRUD actions for Pendaftaran model.
 */
class PendaftaranController extends Controller
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
        						       				'actions'=>['index','create','view','viewd','update','cetakbimbingan','cetakblanko'],
        										'allow'=>true,
        										'matchCallback'=>function(){
        										 return (Yii::$app->user->identity->role==2);}
        									],    
        									[
        										'actions'=>['index','view'],
        										'allow'=>true,
        										'matchCallback'=>function(){
        										return (Yii::$app->user->identity->role==3);}
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

    /**
     * Lists all Pendaftaran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PendaftaranSearch();
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$model = new Pendaftaran();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        	'model'=> $model,
        	
        ]);
    }

    

    /**
     * Creates a new Pendaftaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   
    public function actionCreate()
    {
    	$model = new Pendaftaran();
    	//$bp =Yii::$app->user->identity->username;
    	$searchModel = new PendaftaranSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);    	
    	if ($model->load(Yii::$app->request->post())) {
    		if (Yii::$app->request->isAjax) {
    			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    			return ActiveForm::validate($model);
    		}
    		
    		$model->attributes = $_POST['Pendaftaran'];
    		    		
    		if($model->save())
    			return $this->redirect(['index']);
    			else
    				return $this->render('index', ['model' => $model,'searchModel' => $searchModel,
    						'dataProvider' => $dataProvider,
    					
    				]);
    				
    	} else {
    		return $this->render('index', [  				
    				'model' => $model,'searchModel' => $searchModel,
    				'dataProvider' => $dataProvider,
    			
    		]);
    	}
    }

    /**
     * Updates an existing Pendaftaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
   
    public function actionUpdate($id)
    {
    	$model = $this->findModel($id);
    	$bp =Yii::$app->user->identity->username;
    	$searchModel = new PendaftaranSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    	if ($model->load(Yii::$app->request->post())) {
    		if (Yii::$app->request->isAjax) {
    			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    			return ActiveForm::validate($model);
    		}
    		$model->attributes = $_POST['Pendaftaran'];
    		if($model->save())
    			return $this->redirect(['index']);
    			else
    				return $this->render('index', [
    						'model' => $model,'searchModel' => $searchModel,
    						'dataProvider' => $dataProvider,
    				]);
    				
    	} else {
    		return $this->render('index', [
    				'model' => $model,'searchModel' => $searchModel,
    				'dataProvider' => $dataProvider,
    		]);
    	}
    }
    /**
     * Deletes an existing Pendaftaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionCetakbimbingan(){
    
    	$db=Yii::$app->db;
    	$this->layout='main1';
    	$bepe= Yii::$app->user->identity->username;
    	$command=$db->createCommand("select * from datapembimbing join dosen on datapembimbing.pembimbing=dosen.dsn_nidn 
									join mahasiswa on mahasiswa.mhs_bp=datapembimbing.mahasiswa 
									join laporanpkl l on l.bp=datapembimbing.mahasiswa
									where datapembimbing.mahasiswa='$bepe'");
    	$model=$command->queryAll();
    	
    	$comperiod=$db->createCommand("select * from angkatan a 
										join pendaftaran p on a.id = p.tahun 
										join dosen d on d.dsn_nip=a.kaprodi
										where p.pd_bp='$bepe'");
    	$period=$comperiod->queryAll();
    	//$modell = Datapembimbingpenguji::find()->All();
    	$mpdf=new mPDF();
    	$mpdf->WriteHTML($this->renderPartial('cetakbimbingan',['model'=>$model,'period'=>$period]));
    	$mpdf->Output('');
    	exit;
    	
    }
    public function actionCetakblanko(){   
    	$db=Yii::$app->db;
    	$this->layout='main1';
    	$bepe= Yii::$app->user->identity->username;
    	$command=$db->createCommand("select * from datapembimbing join dosen on datapembimbing.pembimbing=dosen.dsn_nidn 
								join mahasiswa on mahasiswa.mhs_bp=datapembimbing.mahasiswa
								 join laporanpkl l on l.bp=datapembimbing.mahasiswa
								where datapembimbing.mahasiswa='$bepe'");
    	$model=$command->queryAll();
    	
    	//$modell = Datapembimbingpenguji::find()->All();
    	$mpdf=new mPDF();
    	$mpdf->WriteHTML($this->renderPartial('cetakblanko',['model'=>$model]));
    	//$mpdf->WriteHTML($this->renderPartial('cetakblanko'));
    	$mpdf->Output();
    	exit;
    	
    }
    
    /**
     * Displays a single Pendaftaran model.
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
     * Finds the Pendaftaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pendaftaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pendaftaran::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
}
