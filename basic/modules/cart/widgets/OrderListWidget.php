<?php

namespace app\modules\cart\widgets;


use yii\base\Widget;

class OrderListWidget extends Widget
{

    public $cartList;

    public function run()
    {
        $cartList = $this->cartList;
        return $this->render('order-list', compact('cartList'));
    }
}