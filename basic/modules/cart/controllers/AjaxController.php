<?php

namespace app\modules\cart\controllers;

use app\modules\cart\models\Cart;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Контроллер аякс запросов кошолки
 */
class AjaxController extends Controller
{
    public $layout = false;

    public function beforeAction($action)
    {
        if (!\Yii::$app->session->isActive) {
            \Yii::$app->session->open();
        }
        return parent::beforeAction($action);
    }

    /**
     * Добавление покупки в кошолку
     */
    public function actionAddProduct()
    {
        $productId = \Yii::$app->request->post('productId');
        $count = \Yii::$app->request->post('count', 1);
        if (empty($productId)) {
            throw new NotFoundHttpException('Not found product id');
        }
        $cartModel = new Cart();
        $cartModel->setAttributes([
            'product_id' => $productId,
            'count' => $count,
            'session_id' => \Yii::$app->session->id,
            'user_id' => \Yii::$app->user->id,
        ]);

        if (!$cartModel->save()) {
            throw new BadRequestHttpException(print_r($cartModel->getErrors(), true));
        }
        return 'success';
    }

    /**
     * Удаление элемента с кошолки
     * @return int
     */
    public function actionDeleteCart()
    {
        $cartId = \Yii::$app->request->post('cartId');
        $sessionId = \Yii::$app->session->id;
        return Cart::deleteAll(['id' => $cartId, 'session_id' => $sessionId]);

    }

    public function actionChangeCount()
    {
        $cartId = \Yii::$app->request->post('cartId');
        $count = (int)\Yii::$app->request->post('count');
        if ($count <= 0) {
            throw new BadRequestHttpException('Count not valide!');
        }
        $sessionId = \Yii::$app->session->id;
        return Cart::updateAll(['count' => $count], ['id' => $cartId, 'session_id' => $sessionId]);
    }

    /**
     * Обновление виджета кошолки
     * @return string
     */
    public function actionUpdateHeaderWidget()
    {
        return $this->render('update-header-widget');
    }
}
