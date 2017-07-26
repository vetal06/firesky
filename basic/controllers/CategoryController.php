<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{

    public function actionIndex($alias)
    {
        $aliasArray = explode('/', $alias);
        $alias = end($aliasArray);
        $category = Category::find()->andWhere(['alias' => $alias])->one();
        $dataProvider = Product::findByCategoryAlias($alias);
        if (!$dataProvider) {
            throw new NotFoundHttpException(Yii::t('app','Категория не найдена!'));
        }
        if ($dataProvider->getModels() == null) {
            throw new NotFoundHttpException(Yii::t('app', 'Товары не найдены!'));
        }

        return $this->render('index', compact('category', 'dataProvider'));
    }


}
