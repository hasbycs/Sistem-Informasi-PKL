<?php

namespace backend\controllers;

use Yii;
use mPDF;
use backend\models\Datapembimbing;
use backend\models\DatapembimbingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\bootstrap\ActiveForm;

/**
 * DatapembimbingController implements the CRUD actions for Datapembimbing model.
 */
class DatapembimbingController extends Controller
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
        								'actions'=>['index','create','update','delete','view','laporanpbpkl'],
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
    
    /**
     * Lists all Datapembimbing models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DatapembimbingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$model=new Datapembimbing();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        	'model'=>$model,
        ]);
    }
    
        
    public function actionLaporanpbpkl(){
    	$db=Yii::$app->db;
    	$this->layout='main1';
    	$command=$db->createCommand("select * from datapembimbing d JOIN mahasiswa m on d.mahasiswa=m.mhs_bp 									 
											join dosen ds on d.pembimbing = ds.dsn_nidn order by mahasiswa asc								
									");
    	$model=$command->queryAll();
    	//$modell = Datapembimbing::find()->All();
    	$mpdf=new mPDF();
    	$mpdf->WriteHTML($this->renderPartial('laporanpbpkl',['model'=>$model]));
    	$mpdf->Output('Data Pembimbing PKL.pdf', 'D');
    	exit;
    	
    }

    /**
     * Displays a single Datapembimbing model.
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
     * Creates a new Datapembimbing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    
    public function actionCreate()
    {
    	$model = new Datapembimbing();
    	$searchModel = new DatapembimbingSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
      	if ($model->load(Yii::$app->request->post())) {
    		if (Yii::$app->request->isAjax) {
    			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    			return ActiveForm::validate($model);
    		}		
    		$model->attributes = $_POST['Datapembimbing'];
    		    		
    		if($model->save())
    			return $this->redirect(['index']);
    			else
    				return $this->render('index', ['model' => $model,'searchModel' => $searchModel,
    				'dataProvider' => $dataProvider,]);
    				
    	} else {
    		return $this->render('index', [
    				'model' => $model,
    				'searchModel' => $searchModel,
    				'dataProvider' => $dataProvider,
    		]);
    	}
    }
    /**
     * Updates an existing Datapembimbing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    
    public function actionUpdate($id)
    {
    	$model = $this->findModel($id);
    	$searchModel = new DatapembimbingSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    	if ($model->load(Yii::$app->request->post())) {
    		if (Yii::$app->request->isAjax) {
    			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    			return ActiveForm::validate($model);
    		}
    		$model->attributes = $_POST['Datapembimbing'];
    		//$model->updated_by = Yii::$app->getid->getId();
    		//$model->updated_at= new \yii\db\Expression('NOW()');
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
     * Deletes an existing Datapembimbing model.
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
     * Finds the Datapembimbing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Datapembimbing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Datapembimbing::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
