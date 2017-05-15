<?php

namespace app\models;

use Yii;

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
            [['id', 'name', 'fk_category_id'], 'required'],
            [['id', 'fk_category_id'], 'integer'],
            [['is_available'], 'boolean'],
            [['created_at', 'update_at'], 'safe'],
            [['description', 'characteristics', 'images'], 'string'],
            [['name', 'alias'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'alias' => 'Alias',
            'is_available' => 'Is Available',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'description' => 'Description',
            'characteristics' => 'Characteristics',
            'images' => 'Images',
            'fk_category_id' => 'Fk Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'fk_category_id']);
    }
}
