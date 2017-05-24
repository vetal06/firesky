<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias', 'created_at', 'update_at', 'description', 'characteristics', 'images'], 'safe'],
            [['is_available', 'is_top'], 'boolean'],
            [['fk_category_id', 'id'], 'integer'],
            [['price', 'old_price'], 'number'],
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
        $query = Product::find();

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
            'is_available' => $this->is_available,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'fk_category_id' => $this->fk_category_id,
            'id' => $this->id,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'is_top' => $this->is_top,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'characteristics', $this->characteristics])
            ->andFilterWhere(['like', 'images', $this->images]);

        return $dataProvider;
    }
}
