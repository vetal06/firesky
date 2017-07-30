<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\modules\ceo\components\CeoBehavior;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{

    public function behaviors()
    {
        return [
            [
                'class' => CeoBehavior::className(),
            ]
        ];
    }

    public function actionIndex($alias)
    {
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
