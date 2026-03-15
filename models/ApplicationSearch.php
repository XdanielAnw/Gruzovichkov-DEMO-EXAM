<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Application;

/**
 * ApplicationSearch represents the model behind the search form of `app\models\Application`.
 */
class ApplicationSearch extends Application
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'box_type_id', 'box_ves', 'box_gabarit', 'address_from_id', 'address_to_id', 'status_id'], 'integer'],
            [['created_at', 'box_date', 'box_time'], 'safe'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Application::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'box_type_id' => $this->box_type_id,
            'box_date' => $this->box_date,
            'box_time' => $this->box_time,
            'box_ves' => $this->box_ves,
            'box_gabarit' => $this->box_gabarit,
            'address_from_id' => $this->address_from_id,
            'address_to_id' => $this->address_to_id,
            'status_id' => $this->status_id,
        ]);

        return $dataProvider;
    }
}
