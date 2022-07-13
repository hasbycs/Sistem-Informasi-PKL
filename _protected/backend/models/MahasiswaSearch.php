<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form about `backend\models\Mahasiswa`.
 */
class MahasiswaSearch extends Mahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['mhs_bp', 'mhs_nama', 'mhs_tempat_lahir', 'mhs_tgl_lahir','mhs_kelas', 'mhs_tahun','mhs_prodi', 'mhs_jurusan', 'mhs_email', 'mhs_notelp'], 'safe'],
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
        $query = Mahasiswa::find();

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
            //'mhs_id' => $this->mhs_id,
            'mhs_tgl_lahir' => $this->mhs_tgl_lahir,
        ]);

        $query->andFilterWhere(['like', 'mhs_bp', $this->mhs_bp])
            ->andFilterWhere(['like', 'mhs_nama', $this->mhs_nama])
            ->andFilterWhere(['like', 'mhs_tempat_lahir', $this->mhs_tempat_lahir])
            ->andFilterWhere(['like', 'mhs_kelas', $this->mhs_kelas])
            ->andFilterWhere(['like', 'mhs_prodi', $this->mhs_prodi])
            ->andFilterWhere(['like', 'mhs_jurusan', $this->mhs_jurusan])
            ->andFilterWhere(['like', 'mhs_tahun', $this->mhs_tahun])
            ->andFilterWhere(['like', 'mhs_prodi', $this->mhs_prodi])
            ->andFilterWhere(['like', 'mhs_email', $this->mhs_email])
            ->andFilterWhere(['like', 'mhs_notelp', $this->mhs_notelp]);
        

        return $dataProvider;
    }
}
