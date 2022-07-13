<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Laporanpkl;

/**
 * LaporanpklSearch represents the model behind the search form about `frontend\models\Laporanpkl`.
 */
class LaporanpklSearch extends Laporanpkl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bp', 'judul'], 'safe'],
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
        $query = Laporanpkl::find();

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
        $query->andFilterWhere(['like', 'bp', $this->bp])
            ->andFilterWhere(['like', 'judul', $this->judul]);

        return $dataProvider;
    }
}
