<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tempatpkl;

/**
 * TempatpklSearch represents the model behind the search form about `frontend\models\Tempatpkl`.
 */
class TempatpklSearch extends Tempatpkl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_id', 'p_provinsi'], 'integer'],
            [['p_nama', 'p_alamat', 'p_email', 'p_notelp'], 'safe'],
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
        $query = Tempatpkl::find();

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
            'p_id' => $this->p_id,
            'p_provinsi' => $this->p_provinsi,
        ]);

        $query->andFilterWhere(['like', 'p_nama', $this->p_nama])
            ->andFilterWhere(['like', 'p_alamat', $this->p_alamat])
            ->andFilterWhere(['like', 'p_email', $this->p_email])
            ->andFilterWhere(['like', 'p_notelp', $this->p_notelp]);

        return $dataProvider;
    }
}
