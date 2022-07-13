<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Rekaps;
use mPDF;
use backend\models\DAO;
use kartik\mpdf\Pdf;

class RekapsController extends Controller {

      
    public function actionIndex() {
    	$conn = new DAO;
    	$model = new Rekaps;
    	
    	 if ($model->load(Yii::$app->request->post())) {
    	 	if($model -> kelas ==null ) {
    		$query = "select * from sidang JOIN mahasiswa on sidang.s_bp=mahasiswa.mhs_bp
											join dosen on sidang.s_penguji = dosen.dsn_nidn
											join pendaftaran p on p.pd_bp=sidang.s_bp
											join ruangsidang r on sidang.s_ruang= r.id
											where p.tahun=:thn order by s_bp asc";
    		$data = $conn->QueryAll($query, [
    				':thn'=>$model->tahun,
    				
    		]);
    	 } 
    	 else if ($model->load(Yii::$app->request->post())) {
    	 	$query = "select * from sidang JOIN mahasiswa on sidang.s_bp=mahasiswa.mhs_bp
											join dosen on sidang.s_penguji = dosen.dsn_nidn
											join pendaftaran p on p.pd_bp=sidang.s_bp
											join ruangsidang r on sidang.s_ruang= r.id
											where p.tahun=:thn AND mahasiswa.mhs_kelas=:kls order by s_bp asc";
    	 	$data = $conn->QueryAll($query, [
    	 			':thn'=>$model->tahun,
    	 			':kls'=>$model->kelas
    	 	]);
    	 }
    }
    	else {
    		$data = '';
    	}
    	return $this->render('index', [
    			'model' => $model,
    			'data' => $data,
    			
    	]);
    }
    
    
    public function actionPrint($arrdata, $act) {
    	$conn = new DAO;
    	$arrdata = unserialize(urldecode($arrdata));
    	if ($act == 'cetak-sidang') {
    		$tah = \backend\models\Angkatan::findOne($arrdata['tahun']);
    		$kel = \backend\models\Kelas::findOne($arrdata['kelas']);
    		if ($arrdata['kelas'] == null) {
    			$query = "select * from sidang JOIN mahasiswa on sidang.s_bp=mahasiswa.mhs_bp
					join dosen on sidang.s_penguji = dosen.dsn_nidn
					join pendaftaran p on p.pd_bp=sidang.s_bp
					join ruangsidang r on sidang.s_ruang= r.id
					where p.tahun=:thn order by s_bp asc";
    		$data = $conn->QueryAll($query, [
				':thn'=>$arrdata['tahun']
    		]);
    		}else{
    			$query = "select * from sidang JOIN mahasiswa on sidang.s_bp=mahasiswa.mhs_bp
					join dosen on sidang.s_penguji = dosen.dsn_nidn
					join pendaftaran p on p.pd_bp=sidang.s_bp
					join ruangsidang r on sidang.s_ruang= r.id
					where p.tahun=:thn AND mahasiswa.mhs_kelas=:kls order by s_bp asc";
    			$data = $conn->QueryAll($query, [
    					':thn'=>$arrdata['tahun'],
    					':kls'=>$arrdata['kelas'],
    			]);   			
    		}
    		$content=($this->renderPartial('cetak',['data'=>$data,'tah'=>$tah,'kel'=>$kel]));
    		$mpdf = new \mPDF();
    		$mpdf->writeHtml($content);
    		$mpdf->Output();
    		
    		exit;
 
    }
   }
}
