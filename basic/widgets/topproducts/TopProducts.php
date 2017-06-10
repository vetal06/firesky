<?php
namespace app\widgets\topproducts;

use app\models\Product;

/**
 * Виджет топовых продуктов
 */
class TopProducts extends \yii\base\Widget
{

    public $title;
    public $conditionCallable;

    public function run()
    {
        $query = Product::find()->limit(6);
        if (!empty($this->conditionCallable) && is_callable($this->conditionCallable)) {
            call_user_func($this->conditionCallable, $query);
        }
        $products = $query->all();
        $title = $this->title;
        return $this->render('index', compact('products', 'title'));
    }
}