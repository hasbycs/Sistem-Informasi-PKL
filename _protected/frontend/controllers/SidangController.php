<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Sidang;
use frontend\models\SidangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

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
        		
        		'access'=>[
        				'class'=>AccessControl::className(),
        				'rules'=>[
        						[
        								'actions'=>['index','view'],
        								'allow'=>true,
        								'matchCallback'=>function(){
        								return (Yii::$app->user->identity->role==3);},      								
        								],
        						[
        										'actions'=>['index','view'],
        										'allow'=>true,
        										'matchCallback'=>function(){
        										return (Yii::$app->user->identity->role==2);},      										
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
     * Lists all Sidang models.
     * @return mixed
     */
    public function actionIndeXx()
    {
        $searchModel = new SidangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex()
    {
    	$searchModel = new SidangSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    	$db=Yii::$app->db;
    	$th= date('Y');
    	$iddos=Yii::$app->user->identity->username;
    	$nama=Yii::$app->user->identity->namaLengkap;
    	$command=$db->createCommand("select * from sidang join dosen on sidang.s_penguji=dosen.dsn_nidn 
                                        join mahasiswa on mahasiswa.mhs_bp=sidang.s_bp 
                                        JOIN ruangsidang r on r.id=sidang.s_ruang
                                        where year(sidang.s_tgl_sidang)=$th and (sidang.s_penguji='$iddos' or sidang.s_pembimbing='$nama')
										order by sidang.s_tgl_sidang DESC");
    	//(sidang.s_penguji='$iddos' or sidang.s_pembimbing='$nama')
    	$data=$command->queryAll();
    	$sidangmhs=$db->createCommand("select * from sidang s join dosen d on s.s_penguji= d.dsn_nidn
										join ruangsidang r on s.s_ruang=r.id where s.s_bp='$iddos'");
    	$mhssidang=$sidangmhs->queryOne();
    	return $this->render('index', [
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    			'data'=> $data,
    			'mhssidang'=>$mhssidang
    	]);
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
    
    /**
     * Updates an existing Sidang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
   
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
