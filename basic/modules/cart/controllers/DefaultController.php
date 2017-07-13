<?php

namespace app\modules\cart\controllers;

use app\modules\cart\Helper;
use app\modules\cart\models\Cart;
use app\modules\cart\models\CartOrder;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Default controller for the `Cart` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new CartOrder();
        if ($model->load(\Yii::$app->request->post())) {
            $model->setAttributes([
                'user_id' => \Yii::$app->user->id,
            ]);
            if ($model->save()) {
                $this->redirect('/cart/default/success/');
            } else {
                throw new BadRequestHttpException(print_r($model->getErrors(), true));
            }
        }
        $this->setDefaultValues($model);
        $cartList = Cart::findMyCart()
            ->with('product')
            ->all();
        return $this->render('index', compact('model', 'cartList'));
    }

    public function actionSuccess()
    {
        Helper::sendSuccessOrderMail(new CartOrder());
        return $this->render('success');
    }
    private function setDefaultValues(CartOrder $model)
    {
        if(!empty(\Yii::$app->user->id)) {
            $userModel = \Yii::$app->user->getIdentity();
            $profile = $userModel->profile;
            $model->setAttributes([
                'user_name' => $profile->full_name,
                'user_email' => $userModel->email,
                'user_phone' => $profile->phone,
            ]);
        }
    }
}
