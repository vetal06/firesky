<?php

namespace app\models;

use Yii;
use yii\helpers\Json;

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
   * @return array|mixed|null|string
   */
    public function getImagesArray()
    {
      if (is_array($this->images)) {
        return $this->images;
      } elseif (is_string($this->images)) {
        $this->images = Json::decode($this->images);
        return $this->images;
      }
      return null;
    }

  /**
   * Адресс главно  картинки
   */
    public function getMainImageUrl()
    {
      $images = $this->getImagesArray();
      if (empty($images)){
        return null;
      }

      $imageName = array_shift($images);
      return Yii::$app->params['productImagesPath'].$imageName;
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
}
