<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PersonalInfo;

/**
 * PersonalInfoSearch represents the model behind the search form of `app\models\PersonalInfo`.
 */
class PersonalInfoSearch extends PersonalInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'image_url', 'firstname', 'lastname', 'fistnamethai', 'lastnamethai', 'genderemail', 'phone', 'education_qualification', 'graduating', 'university', 'country', 'current_position', 'expertise'], 'safe'],
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
        $query = PersonalInfo::find();

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
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'image_url', $this->image_url])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'fistnamethai', $this->fistnamethai])
            ->andFilterWhere(['like', 'lastnamethai', $this->lastnamethai])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'education_qualification', $this->education_qualification])
            ->andFilterWhere(['like', 'graduating', $this->graduating])
            ->andFilterWhere(['like', 'university', $this->university])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'current_position', $this->current_position])
            ->andFilterWhere(['like', 'expertise', $this->expertise]);

        return $dataProvider;
    }
}
