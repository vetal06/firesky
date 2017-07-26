<?php

namespace app\modules\admin\controllers;


use yii\base\Controller;

class CategoryController extends Controller
{

  public function actionIndex()
  {
    return $this->render('index');
  }
}