<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property boolean $is_available
 * @property string $created_at
 * @property string $update_at
 * @property string $description
 * @property string $characteristics
 * @property string $images
 * @property integer $fk_category_id
 *
 * @property Category $fkCategory
 */
class Product extends \yii\db\ActiveRecord
{

    public $fileImage;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'fk_category_id', 'characteristics'], 'required'],
            [['fk_category_id'], 'integer'],
            [['is_available'], 'boolean'],
            [['created_at', 'update_at'], 'safe'],
            [['description', 'characteristics', 'images'], 'string'],
            [['name', 'alias'], 'string', 'max' => 255],
            [['fileImage'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['price', 'old_price'], 'number'],
            [['fk_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['fk_category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'alias' => 'Alias',
            'is_available' => 'Активность',
            'created_at' => 'Дата создания',
            'update_at' => 'Дата редактирования',
            'description' => 'Описание',
            'characteristics' => 'Характеристики',
            'images' => 'Картинки',
            'fileImage' => 'Картинка',
            'fk_category_id' => 'Категория',
            'price' => 'Цена',
            'old_price' => 'Старая цена до скидки',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'fk_category_id']);
    }

  /**
   * Массив картинок
   * @return array
   */
    public function getImagesArray()
    {
      if (is_array($this->images)) {
        return $this->images;
      } elseif (is_string($this->images)) {
        $this->images = Json::decode($this->images);
        return $this->images;
      }
      return [];
    }

  /**
   * Адресс главно  картинки
   */
    public function getMainImageUrl()
    {
      $images = $this->getImagesArray();
      if (empty($images)){
          $url = Yii::$app->params['emptyImage'];
      } else {
          $imageName = array_shift($images);
          $url = Yii::$app->params['productImagesPath'].$imageName;
      }
      return $url;
    }

  /**
   * Список URL адресов картинок
   */
    public function getAllImagesUrl()
    {
      $data = $this->getImagesArray();
      foreach ($data as &$value) {
        $value = Yii::$app->params['productImagesPath'].$value;
      }
      return $data;
    }

    /**
     * урл карточки объeкта
     */
    public function getUrl()
    {
        return '/prod-'.$this->alias.'-'.$this->id;
    }

    /**
     * Список характеристик
     */
    public function getCharacteristicsList()
    {
        $characteristicsValues = Json::decode($this->characteristics);
        if (empty($characteristicsValues)) {
            return [];
        }
        $ids = array_keys($characteristicsValues);
        $data = Characteristics::find()->where(['in', 'key', $ids])->all();
        $resData = [];
        foreach ($data as $row) {
            $resData[] = [
                'key' => $row->key,
                'name' => $row->name,
                'icon' => $row->icon,
                'value' => isset($characteristicsValues[$row->key])?$characteristicsValues[$row->key]:'',
            ];
        }
        return $resData;
    }

    public static function findByCategoryAlias($alias)
    {
        $category = Category::findOne(['alias' => $alias]);
        if ($category == null) {
            return false;
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
        return new ActiveDataProvider([
            'query' => $productsQuery,
            'sort' => [
                'attributes' => [
                    'action' => [
                        'asc' => [ 'old_price' => SORT_ASC, 'is_top' => SORT_DESC],
                        'desc' => ['old_price' => SORT_DESC, 'is_top' => SORT_ASC],
                    ],
                    'price' => [
                        'asc' => ['price' => SORT_ASC],
                        'desc' => new Expression('price DESC NULLS LAST'),
                    ],
                    'hit' => [
                        'asc' => ['is_top' => SORT_DESC],
                        'desc' => ['is_top' => SORT_ASC],
                    ],
                    'name' => [
                        'asc' => ['name' => SORT_ASC],
                        'desc' => ['name' => SORT_DESC],
                    ],
                ],

            ],
        ]);
    }
}
