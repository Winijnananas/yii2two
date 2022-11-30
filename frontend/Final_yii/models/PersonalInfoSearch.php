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
            [['_id', 'image_url', 'firstname', 'lastname', 'nickname', 'age', 'dob', 'gender', 'high_school_name', 'graduation', 'college_name', 'school_of', 'color', 'food', 'sport', 'comlangs', 'database', 'course', 'langs', 'Facebook', 'Instagram', 'email', 'phone'], 'safe'],
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
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'high_school_name', $this->high_school_name])
            ->andFilterWhere(['like', 'graduation', $this->graduation])
            ->andFilterWhere(['like', 'college_name', $this->college_name])
            ->andFilterWhere(['like', 'school_of', $this->school_of])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'food', $this->food])
            ->andFilterWhere(['like', 'sport', $this->sport])
            ->andFilterWhere(['like', 'comlangs', $this->comlangs])
            ->andFilterWhere(['like', 'database', $this->database])
            ->andFilterWhere(['like', 'course', $this->course])
            ->andFilterWhere(['like', 'langs', $this->langs])
            ->andFilterWhere(['like', 'Facebook', $this->Facebook])
            ->andFilterWhere(['like', 'Instagram', $this->Instagram])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
