<?php
namespace app\modules\cart\widgets;


use app\modules\cart\models\Cart;
use yii\base\Exception;
use yii\base\Widget;

class AddButtonWidget extends Widget
{
    public $productId;
    public $template = 'add-button';

    public function run()
    {
        if (empty($this->productId)) {
            throw new Exception('Set product id in widget!');
        }
        $productId = $this->productId;
        $productExistInCart = Cart::findMyCart()->andWhere(['product_id' => $productId])->exists();
        return $this->render($this->template, compact('productId', 'productExistInCart'));
    }

}