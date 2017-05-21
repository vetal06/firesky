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
      $category = Category::findOne(['alias' => $alias]);
      if ($category == null) {
        throw new NotFoundHttpException(Yii::t('app','Категория не найдена!'));
      }
      $childrenCategoryes = Category::find()->select('id')->where('lft >= :lft and rgt <= :rgt and active = true', [
          ':lft' => $category->lft,
          ':rgt' => $category->rgt,
      ])->asArray()->all();
      $catIds = ArrayHelper::getColumn($childrenCategoryes, 'id');

      $productsQuery = Product::find()->where([
          'fk_category_id' => $catIds,
          'is_available' => true
      ]);
      $dataProvider = new ActiveDataProvider([
          'query' => $productsQuery
      ]);
      if ($dataProvider->getModels() == null) {
        throw new NotFoundHttpException(Yii::t('app','Товары не найдены!'));
      }

      return $this->render('index', compact('category', 'dataProvider'));
    }


}
