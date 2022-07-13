<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sidang;

/**
 * SidangSearch represents the model behind the search form about `backend\models\Sidang`.
 */
class SidangSearch extends Sidang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 's_bp'], 'integer'],
        		[['s_tgl_sidang', 's_ruang', 's_jam', 's_jam2', 's_pembimbing', 's_penguji', 's_tempat_pkl'], 'safe'],
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
        $query = Sidang::find();

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
            's_id' => $this->s_id,
            's_bp' => $this->s_bp,
            's_tgl_sidang' => $this->s_tgl_sidang,
            's_pembimbing' => $this->s_pembimbing,
            's_penguji' => $this->s_penguji,
            's_tempat_pkl' => $this->s_tempat_pkl,
        ]);

        $query
            ->andFilterWhere(['like', 's_ruang', $this->s_ruang])
            ->andFilterWhere(['like', 's_jam', $this->s_jam])
            ->andFilterWhere(['like', 's_jam2', $this->s_jam2]);

        return $dataProvider;
    }
}
