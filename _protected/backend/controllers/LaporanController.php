<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Laporan;
use mPDF;
use backend\models\DAO;
use kartik\mpdf\Pdf;

class LaporanController extends Controller {
  

    public function actionIndex() {
    	$conn = new DAO;
    	$model = new Laporan;
    	if ($model->load(Yii::$app->request->post())) {
    		$query = "select * from datapembimbing d JOIN mahasiswa m on d.mahasiswa=m.mhs_bp
						join dosen ds on d.pembimbing = ds.dsn_nidn join pendaftaran p on p.pd_bp=d.mahasiswa
						where p.tahun=:thn order by mahasiswa asc";
    		$data = $conn->QueryAll($query, [
    				':thn'=>$model->tahun,
    				
    		]);
    	} else {
    		$data = '';
    	}
    	return $this->render('index', [
    			'model' => $model,
    			'data' => $data
    	]);
    }
    
    
    public function actionPrint($arrdata, $act) {
    	$conn = new DAO;
    	$arrdata = unserialize(urldecode($arrdata));
    	if ($act == 'cetak-pembimbing') {
    		//Cetak Peminat
    		//$modFormulir = \app\modules\laporan\models\Formulir::findOne($arrdata['formulir']);
    		//$modPeriode = \app\modules\laporan\models\Periode::findOne($arrdata['periode']);
    		$query ="select * from datapembimbing d JOIN mahasiswa m on d.mahasiswa=m.mhs_bp
					join dosen ds on d.pembimbing = ds.dsn_nidn join pendaftaran p on p.pd_bp=d.mahasiswa
					where p.tahun=:thn order by mahasiswa asc";
    		$data = $conn->QueryAll($query, [    				
    				':thn'=>$arrdata['tahun']
    		]);		
    		$content=($this->renderPartial('cetak',['data'=>$data]));
    		$mpdf = new \mPDF();
    		$mpdf->writeHtml($content);
    		$mpdf->Output();   		
    		exit;
    }
   }
}
