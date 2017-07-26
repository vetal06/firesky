<?php
namespace app\modules\cart\widgets;

use app\modules\cart\Helper;
use app\modules\cart\models\Cart;
use yii\base\Widget;
use yii\helpers\Url;

/**
 * Виджет кошолки
 * Class CatHeadWidget
 * @package app\modules\cart\widgets
 */
class CatHeadWidget extends Widget
{
    public function run()
    {
        $data = Helper::getCartData();
        return $this->render('cart-head', $data);
    }

}