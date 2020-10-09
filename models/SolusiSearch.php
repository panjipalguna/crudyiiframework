<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Solusi;

/**
 * SolusiSearch represents the model behind the search form of `app\models\Solusi`.
 */
class SolusiSearch extends Solusi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_solusi', 'id_penyakit'], 'integer'],
            [['solusi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Solusi::find();

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
            'id_solusi' => $this->id_solusi,
            'id_penyakit' => $this->id_penyakit,
        ]);

        $query->andFilterWhere(['like', 'solusi', $this->solusi]);

        return $dataProvider;
    }
}
