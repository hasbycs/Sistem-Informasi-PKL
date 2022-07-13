<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dosen;

/**
 * DosenSearch represents the model behind the search form about `frontend\models\Dosen`.
 */
class DosenSearch extends Dosen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           
            [['dsn_nip', 'dsn_nidn','dsn_nama', 'dsn_notelp', 'dsn_email'], 'safe'],
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
        $query = Dosen::find();

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
       

        $query->andFilterWhere(['like', 'dsn_nip', $this->dsn_nip])
            ->andFilterWhere(['like', 'dsn_nama', $this->dsn_nama])
            ->andFilterWhere(['like', 'dsn_notelp', $this->dsn_notelp])
            ->andFilterWhere(['like', 'dsn_email', $this->dsn_email])
            ->andFilterWhere(['like', 'dsn_nidn', $this->dsn_nidn]);

        return $dataProvider;
    }
}
