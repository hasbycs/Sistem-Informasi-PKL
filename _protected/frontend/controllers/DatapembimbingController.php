<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Datapembimbing;
use frontend\models\DatapembimbingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use arogachev\excel\components\Model;

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
        								'actions'=>['index','update','delete','view','laporanpbpkl'],
        								'allow'=>true,
        								'matchCallback'=>function(){
        								return (Yii::$app->user->identity->role==1);}
        								],
        								[
        										'actions'=>['index','view','indexall'],
        										'allow'=>true,
        										'matchCallback'=>function(){
        										return (Yii::$app->user->identity->role==2);}
        										],
        										
        										[
        												'actions'=>['index','view','indexall'],
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
     * Lists all Datapembimbing models.
     * @return mixed
     */
    public function actionIndexx()
    {
        $searchModel = new DatapembimbingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex()
    {
    	$searchModel = new DatapembimbingSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);    	
    	$iddos=Yii::$app->user->identity->username;
    	$dataProvider2= new \yii\data\ActiveDataProvider([
    			'query'=>Datapembimbing::find()->where(['pembimbing'=>$iddos])
    	]);
    	$db=Yii::$app->db;
    	//$command=$db->createCommand("select * from datapembimbing join mahasiswa on datapembimbing.mahasiswa=mahasiswa.mhs_bp
		//							 where pembimbing='$iddos' ORDER BY datapembimbing.ankt_bp DESC");
    	//$data=$command->queryAll();
    	$com=$db->createCommand("select * from datapembimbing dp join dosen d
								on dp.pembimbing=d.dsn_nidn where mahasiswa='$iddos'");
    	$dos=$com->queryOne();
    	return $this->render('index', [
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    			'dataProvider2'=>$dataProvider2,
    			//'data'=> $data,
    			'dos'=>$dos,
    	]);
    }
    public function actionIndexall()
    {
    	$searchModel = new DatapembimbingSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    	//$iddos=Yii::$app->user->identity->username;
    	//$dataProvider2= new \yii\data\ActiveDataProvider([
    	//		'query'=>Datapembimbing::find()->where(['pembimbing'=>$iddos])
    	//]);
    	//$db=Yii::$app->db;
    	//$command=$db->createCommand("select * from datapembimbing join mahasiswa on datapembimbing.mahasiswa=mahasiswa.mhs_bp
    	//							 where pembimbing='$iddos' ORDER BY datapembimbing.ankt_bp DESC");
    	//$data=$command->queryAll();
    	//$com=$db->createCommand("select * from datapembimbing dp join dosen d
    	//						on dp.pembimbing=d.dsn_nidn where mahasiswa='$iddos'");
    	//$dos=$com->queryOne();
    	return $this->render('indexall', [
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    			//'dataProvider2'=>$dataProvider2,
    			//'data'=> $data,
    			//'dos'=>$dos,
    	]);
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
   

    /**
     * Updates an existing Datapembimbing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */

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
