<?php
namespace app\widgets\menu;
use app\models\Category;
use yii\base\Exception;

/**
 * Виджет левой менюшки
 */
class LeftMenu extends \yii\base\Widget
{

  public $view ;
  public $cacheTime = 360;

  /**
   * Запуск виджета
   * @return mixed|string
   */
  public function run()
  {
    if ($this->view == null) {
      throw new Exception('Set view name');
    }
    $key =  self::className().$this->view;
    $res = \Yii::$app->cache->get($key);
    if (!$res) {
      $categories = Category::find()->where('lvl = 1')->orderBy('lft')->all();
      $res = $this->render($this->view, compact('categories'));
      \Yii::$app->cache->set($key, $res, $this->cacheTime);
    }
    return $res;

  }

  /**
   * Рекурсивная функция для отображения списка категорий
   * @param $categories
   * @param callable $callback
   * @param bool $isChildren
   * @return string
   */
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