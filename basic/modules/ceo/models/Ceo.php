<?php

namespace app\modules\ceo\models;

use Yii;
use yii\db\Expression;
use yii\helpers\Json;

/**
 * This is the model class for table "ceo".
 *
 * @property string $route_name
 * @property string $route_parameters
 * @property string $name
 * @property string $ceo_text
 * @property string $title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class Ceo extends \yii\db\ActiveRecord
{
    public $url;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ceo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['route_name', 'route_parameters', 'title', 'meta_keywords', 'meta_description'], 'required'],
            [['route_parameters', 'ceo_text'], 'string'],
            [['route_name', 'name'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 70],
            [['meta_keywords', 'meta_description'], 'string', 'max' => 110],
            ['url', 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'route_name' => 'Route Name',
            'route_parameters' => 'Route Parameters',
            'name' => 'Name',
            'ceo_text' => 'Ceo Text',
            'title' => 'Title',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
            'url' => 'Url links'
        ];
    }

    public static function findByRoute($name, $params)
    {

        if (is_array($params)) {
            if (empty($params)) {
                $paramsEncode = '{}';
            } else {
                $paramsEncode = Json::encode($params);
            }
        } else {
            $paramsEncode = $params;
        }

        $query = Ceo::find()->where(['route_name' => $name])
            ->andWhere(new Expression("route_parameters @> :params", [":params" => $paramsEncode]));
        return $query;
    }
}
