<?php

namespace app\modules\page\controllers;

use app\modules\page\models\Page;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `Page` module
 */
class DefaultController extends Controller
{
    /**
     * Экшн страницы на сайте
     * @param $alias
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex($alias, $id)
    {
        $model = Page::find()->where(['id' => $id, 'alias' => $alias, 'is_active' => true, ])->one();
        if ($model == null) {
            throw new NotFoundHttpException();
        }
        return $this->render('index', compact('model'));
    }
}
