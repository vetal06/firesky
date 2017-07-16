<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

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
                'lft > :lft and rgt < :rgt and lvl = :lvl and active = true',
                [
                    ':lft' => $this->lft,
                    ':rgt' => $this->rgt,
                    ':lvl' => $this->lvl + 1,
                ])->orderBy('lft')->all();
        }
        return $this->children;
    }

    /**
     * Полный путь вместе с родителями
     * @return array
     */
    public function getFullAlias()
    {
        $query = (new Query())->select(new Expression("string_agg(\"alias\", '/' ORDER BY lvl)"))
            ->from('category')
            ->andWhere('lft <= :lft and rgt >= :rgt and lvl >=1', [':lft' => $this->lft, ':rgt' => $this->rgt]);
        return $query->scalar();
    }


    /**
     * Адрес категории
     * @return string
     */
    public function getUrl()
    {
        return Url::to(["/cat-{$this->getFullAlias()}/", 'lang' => Yii::$app->language]);
    }

    /**
     * Список всех категорий меню в виде массива с дочерними элементами
     * @return array|mixed|null
     */
    public static function getAllArrayCategory()
    {
        $caheKey = __METHOD__;
        if ($data = Yii::$app->cache->get($caheKey)) {
            return $data;
        } else {
            $mainCat = self::findOne(['id' => 1]);
            if ($mainCat->getChildren() == null) {
                return null;
            }
            $resData = self::getCategoryes($mainCat->getChildren());
            Yii::$app->cache->set($caheKey, $resData, 3600);
            return $resData;
        }
    }

    /**
     * Рекурсивная функция для получения очерних категорий
     * @param $data
     * @return array|null
     */
    private static function getCategoryes($data)
    {
        if ($data == null) {
            return null;
        }
        $res = [];
        foreach ($data as $cat) {
            $res[] = [
                'id' => $cat->id,
                'name' => $cat->name,
                'childrens' => self::getCategoryes($cat->getChildren())
            ];
        }
        return $res;
    }

    public static function getDropDownList()
    {
        $category = self::getAllArrayCategory();
        return self::getRecursiveDropDownList($category);
    }

    private static function getRecursiveDropDownList($data, $alias = '-')
    {
        if ($data == null) {
            return null;
        }
        $res = [];
        foreach ($data as $cat) {
            $res[$cat['id']] = $alias . $cat['name'];
            if (!empty($cat['childrens'])) {
                $res = ArrayHelper::merge($res, self::getRecursiveDropDownList($cat['childrens'], $alias . '-'));
            }
        }
        return $res;
    }
}