<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Tempatpkl;
use frontend\models\TempatpklSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * TempatpklController implements the CRUD actions for Tempatpkl model.
 */
class TempatpklController extends Controller
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
        		'access'=>[
        				'class'=>AccessControl::className(),
        				'rules'=>[
        						[
        								'actions'=>['index','view'],
        								'allow'=>true,
        								'matchCallback'=>function(){
        								return (Yii::$app->user->identity->role==2);}
        								],
        								
        								],
        								],
        ];
    }

    /**
     * Lists all Tempatpkl models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TempatpklSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tempatpkl model.
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
     * Creates a new Tempatpkl model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   

    /**
     * Updates an existing Tempatpkl model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    /**
     * Deletes an existing Tempatpkl model.
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
     * Finds the Tempatpkl model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tempatpkl the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tempatpkl::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
