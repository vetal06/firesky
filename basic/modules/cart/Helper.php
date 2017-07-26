<?php
namespace app\modules\cart;


use app\modules\cart\models\Cart;
use app\modules\cart\models\CartOrder;
use yii\helpers\Url;

abstract class Helper
{

    /**
     * Данные корзины
     * @return array
     */
    public static function getCartData()
    {
        $cartQuery = Cart::findMyCart();
        $countProduct = $cartQuery->count();
        $cartUrl = $countProduct > 0 ? Url::to('/cart/default/') : '#';
        $summPrice = $cartQuery->joinWith('product')->sum('product.price * cart.count');
        $cartDesc = $countProduct > 0 ? $summPrice. ' '. \Yii::$app->params['currency']:\Yii::t('app', 'Пуста');

        return compact('countProduct', 'cartUrl', 'summPrice', 'cartDesc');
    }

    /**
     * Отправка письма об успешном заказе
     */
    public static function sendSuccessOrderMail(CartOrder $cartOrdrt)
    {
        \Yii::$app->mailer->compose('order/admin-success', ['contactForm' => \Yii::$app->params['adminEmail']])
            ->setFrom(\Yii::$app->params['adminEmail'])
            ->setTo(\Yii::$app->params['adminEmail'])
            ->setSubject('Заказ на сайте!')
            ->send();
    }
}