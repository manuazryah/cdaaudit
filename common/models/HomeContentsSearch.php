<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomeContents;

/**
 * HomeContentsSearch represents the model behind the search form about `common\models\HomeContents`.
 */
class HomeContentsSearch extends HomeContents
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['top_title', 'phone', 'email', 'facebook_link', 'twitter_link', 'linkedin_link', 'youtube_link', 'welcome_content', 'ceo_name', 'ceo_message', 'service_description', 'middle_title', 'middle_description', 'footer_about_content', 'footer_address', 'DOC', 'DOU'], 'safe'],
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
        $query = HomeContents::find();

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

        $query->andFilterWhere(['like', 'top_title', $this->top_title])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'linkedin_link', $this->linkedin_link])
            ->andFilterWhere(['like', 'youtube_link', $this->youtube_link])
            ->andFilterWhere(['like', 'welcome_content', $this->welcome_content])
            ->andFilterWhere(['like', 'ceo_name', $this->ceo_name])
            ->andFilterWhere(['like', 'ceo_message', $this->ceo_message])
            ->andFilterWhere(['like', 'service_description', $this->service_description])
            ->andFilterWhere(['like', 'middle_title', $this->middle_title])
            ->andFilterWhere(['like', 'middle_description', $this->middle_description])
            ->andFilterWhere(['like', 'footer_about_content', $this->footer_about_content])
            ->andFilterWhere(['like', 'footer_address', $this->footer_address]);

        return $dataProvider;
    }
}
