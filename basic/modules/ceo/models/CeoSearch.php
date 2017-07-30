<?php

namespace app\modules\ceo\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\ceo\models\Ceo;

/**
 * CeoSearch represents the model behind the search form about `app\modules\ceo\models\Ceo`.
 */
class CeoSearch extends Ceo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'name', 'ceo_text', 'title', 'meta_keywords', 'meta_description'], 'safe'],
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
        $query = Ceo::find();

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
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'ceo_text', $this->ceo_text])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description]);

        return $dataProvider;
    }
}
