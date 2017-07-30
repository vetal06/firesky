<?php

namespace app\controllers;

use app\models\Product;
use app\modules\ceo\components\CeoBehavior;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Контроллер карточки 1 го объекта
 */
class ProductController extends Controller
{

    public function behaviors()
    {
        return [
            [
                'class' => CeoBehavior::className(),
            ]
        ];
    }

    /**
     * Главный экшн карточки объекта
     */
    public function actionIndex($alias, $id)
    {
        $model = Product::findOne(['id' => $id]);
        if ($model == null) {
            throw new NotFoundHttpException();
        }
        return $this->render('index', compact('model'));
    }
}