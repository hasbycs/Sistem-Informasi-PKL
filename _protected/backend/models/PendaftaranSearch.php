<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pendaftaran;
use backend\models\Mahasiswa;

/**
 * PendaftaranSearch represents the model behind the search form about `backend\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pd_id', 'pd_instansi','tahun'], 'integer'],
            [['pd_bp', 'pd_tgl_mulai', 'pd_tgl_selesai', 'pd_pbblap','nama'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pendaftaran::find();
	
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pd_id' => $this->pd_id,
            'pd_instansi' => $this->pd_instansi,
            'pd_tgl_mulai' => $this->pd_tgl_mulai,
            'pd_tgl_selesai' => $this->pd_tgl_selesai,
                         	
        ]);

        $query->andFilterWhere(['like', 'pd_bp', $this->pd_bp])
            ->andFilterWhere(['like', 'pd_pbblap', $this->pd_pbblap])
            ->andFilterWhere(['like', 'tahun', $this->tahun]);
         

        return $dataProvider;
    }
}
