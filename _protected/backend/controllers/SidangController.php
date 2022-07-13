<?php

namespace backend\controllers;

use Yii;
use backend\models\Sidang;
use yii\bootstrap\ActiveForm;
use backend\models\SidangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\db\Query;
use mPDF;

/**
 * SidangController implements the CRUD actions for Sidang model.
 */
class SidangController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }  
    public function actionGetmahasiswa(){
    	if(Yii::$app->request->isAjax){
    		$id=isset ($_GET['id'])? $_GET['id']:'';
    		$pendaftaran=(new Query())
    		->select(['*'])
    		->from("datapembimbing")
    		->join('JOIN', 'pendaftaran', 'pendaftaran.pd_bp=datapembimbing.mahasiswa')
    	  	->join('JOIN', 'dosen', 'dosen.dsn_nidn=datapembimbing.pembimbing')
    		->join('JOIN', 'tempatpkl', 'tempatpkl.p_id=pendaftaran.pd_instansi')
    		->where(['pd_bp'=>$id])
    	    ->one();   		
    		$data=[
    				's_pembimbing'=>$pendaftaran['dsn_nama'],
    				's_tempat_pkl'=>$pendaftaran['p_nama'],
    		];
    		return Json::encode($data);}
    }
    /**
     * Lists all Sidang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SidangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionDatasidang()
    {   	   	
    	$db=Yii::$app->db;
    	$this->layout='main1';
    	$command=$db->createCommand("select * from sidang JOIN mahasiswa on sidang.s_bp=mahasiswa.mhs_bp
											join dosen on sidang.s_penguji = dosen.dsn_nidn");
    	$model=$command->queryAll();
    	//$modell = Datapembimbing::find()->All();
    	$mpdf=new mPDF();
    	$mpdf->WriteHTML($this->renderPartial('datasidang',['model'=>$model]));
    	$mpdf->Output();
    	exit;
    	
    }
    
    /**
     * Displays a single Sidang model.
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
     * Creates a new Sidang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /*
    public function actionCreate()
    {
        $model = new Sidang();
        $searchModel = new SidangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	if (Yii::$app->request->isAjax) {
        		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        		return ActiveForm::validate($model);
        	}
        	$model->attributes = $_POST['Sidang'];
        	if($model->save())
        		return $this->redirect(['index']);
        		else
        			return $this->render('index', ['model' => $model,'searchModel' => $searchModel,
        					'dataProvider' => $dataProvider,]);        	
        } else {
            return $this->render('create', [
                'model' => $model,
            	'searchModel' => $searchModel,
            	'dataProvider' => $dataProvider,
            ]);
        }
    }*/
        		
        		public function actionCreate()
        		{
        			$model = new Sidang();
        			
        			if ($model->load(Yii::$app->request->post()) && $model->save()) {
        				//return $this->redirect(['view', 'id' => $model->id]);
        				return $this->redirect(['index']);
        			} else {
        				return $this->render('create', [
        						'model' => $model,
        				]);
        			}
        		}

    /**
     * Updates an existing Sidang model.
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
        }
    }

    /**
     * Deletes an existing Sidang model.
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
     * Finds the Sidang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sidang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sidang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
