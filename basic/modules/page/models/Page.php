<?php

namespace app\modules\page\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property string $shot_text
 * @property string $text
 * @property boolean $is_active
 * @property string $preview_image
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias', 'text'], 'required'],
            [['shot_text', 'text'], 'string'],
            [['is_active'], 'boolean'],
            [['name', 'alias', 'preview_image'], 'string', 'max' => 255],
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
            'shot_text' => 'Shot Text',
            'text' => 'Text',
            'is_active' => 'Is Active',
            'preview_image' => 'Preview Image',
        ];
    }
}
