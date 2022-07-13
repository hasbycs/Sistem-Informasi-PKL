<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pendaftaran;

/**
 * PendaftaranSearch represents the model behind the search form about `frontend\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pd_id', 'tahun'], 'integer'],
        		[['pd_bp','pd_instansi','pd_tgl_mulai', 'pd_tgl_selesai', 'pd_pbblap'], 'safe'],
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
           
            'pd_tgl_mulai' => $this->pd_tgl_mulai,
            'pd_tgl_selesai' => $this->pd_tgl_selesai,
            //'pd_dosen' => $this->pd_dosen,
        ]);

        $query->andFilterWhere(['like', 'pd_bp', $this->pd_bp])
            //->andFilterWhere(['like', 'pd_nama', $this->pd_nama])
        ->andFilterWhere(['like', 'pd_instansi', $this->pd_instansi])
            ->andFilterWhere(['like', 'pd_pbblap', $this->pd_pbblap])
            ->andFilterWhere(['like', 'tahun', $this->tahun]);

        return $dataProvider;
    }
}
