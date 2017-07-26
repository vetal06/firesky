<?php
namespace app\modules\search\models;

use app\models\Product;
use yii\db\Expression;

class Search extends \yii\base\Model
{
    public $query;

    public function rules()
    {
        return[
            ['query', 'required'],
            ['query', 'string', 'max' => 100]
        ];
    }

    public function attributeLabels()
    {
        return [
            'query' => \Yii::t('app', 'Поиск товаров'),
        ];
    }

    public function search()
    {
        $query = Product::find();
        $query->andWhere(new Expression('search_tsv @@ plainto_tsquery(:text)', [":text" => $this->query]));

        return $query;
    }
}