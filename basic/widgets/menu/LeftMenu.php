<?php
namespace app\widgets\menu;
use app\models\Category;

/**
 * Виджет левой менюшки
 */
class LeftMenu extends \yii\base\Widget
{

  public function run()
  {
    $key =  self::className();
    $res = \Yii::$app->cache->get($key);
    if (!$res) {
      $categories = Category::find()->where('lvl = 1')->orderBy('lft')->all();
      $res = $this->render('left-menu', compact('categories'));
      \Yii::$app->cache->set($key, $res);
    }
    return $res;

  }

  public function writeMenu($categories,  callable $callback, $isChildren = false)
  {
    $res = '';
    foreach ($categories as $cat) {
      $childrens = $cat->getChildren();
      $childrenContent = ($childrens)? $this->writeMenu($childrens, $callback, true):null;
      $res .= $callback($cat, $childrenContent, $isChildren);
    }
    return $res;
  }


}