<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\WhyCda;

/**
 * WhyCdaSearch represents the model behind the search form about `common\models\WhyCda`.
 */
class WhyCdaSearch extends WhyCda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['main_heading', 'section1_content', 'section1_image', 'section2_title', 'section2_sub_title', 'section2_content', 'section2_image', 'why_choose_cda', 'DOC', 'DOU'], 'safe'],
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
        $query = WhyCda::find();

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
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'main_heading', $this->main_heading])
            ->andFilterWhere(['like', 'section1_content', $this->section1_content])
            ->andFilterWhere(['like', 'section1_image', $this->section1_image])
            ->andFilterWhere(['like', 'section2_title', $this->section2_title])
            ->andFilterWhere(['like', 'section2_sub_title', $this->section2_sub_title])
            ->andFilterWhere(['like', 'section2_content', $this->section2_content])
            ->andFilterWhere(['like', 'section2_image', $this->section2_image])
            ->andFilterWhere(['like', 'why_choose_cda', $this->why_choose_cda]);

        return $dataProvider;
    }
}
