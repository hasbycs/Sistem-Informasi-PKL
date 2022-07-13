<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Datapembimbing;

/**
 * DatapembimbingSearch represents the model behind the search form about `backend\models\Datapembimbing`.
 */
class DatapembimbingSearch extends Datapembimbing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['mahasiswa', 'pembimbing','ankt_bp'], 'safe'],
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
        $query = Datapembimbing::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'mahasiswa', $this->mahasiswa])
            ->andFilterWhere(['like', 'pembimbing', $this->pembimbing])
            ->andFilterWhere(['like', 'ankt_bp', $this->ankt_bp]);
        return $dataProvider;
    }
}
