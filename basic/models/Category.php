<?php

namespace app\models;

use Yii;

class Category extends \kartik\tree\models\Tree
{
  use \kartik\tree\models\TreeTrait;

  private $children;
  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'category';
  }

  public function getChildren()
  {
    if (!isset($this->children)) {
      $this->children = self::find()->andWhere(
          'lft > :lft and rgt < :rgt and lvl = :lvl',
          [
              ':lft' => $this->lft,
              ':rgt' => $this->rgt,
              ':lvl' => $this->lvl + 1,
          ])->orderBy('lft')->all();
    }
    return $this->children;
  }
}