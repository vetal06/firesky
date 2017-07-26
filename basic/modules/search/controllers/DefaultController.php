<?php

namespace app\modules\search\controllers;

use app\modules\search\models\Search;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `search` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $model = new Search();
        if (!$model->load(\Yii::$app->request->get())) {
            throw new NotFoundHttpException();
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $model->search(),
        ]);
        return $this->render('index', compact('dataProvider'));
    }
}
