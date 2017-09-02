<?php

namespace app\modules\ceo\models;

use Yii;
use yii\db\Expression;
use yii\helpers\Json;
use yii\helpers\Url;

/**
 * This is the model class for table "ceo".
 *
 * @property string $url
 * @property string $name
 * @property string $ceo_text
 * @property string $title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class Ceo extends \yii\db\ActiveRecord
{
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
            [['url', 'title', 'meta_keywords', 'meta_description'], 'required'],
            [['url', 'ceo_text'], 'string'],
            [['url', 'name'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'ceo_text' => 'Ceo Text',
            'title' => 'Title',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
            'url' => 'Url links'
        ];
    }

    public static function findByRoute($url=null)
    {

        if ($url == null) {
            $currentParams = Yii::$app->getRequest()->getQueryParams();
            $urlParams = Yii::$app->getModule('ceo')->urlParams;
            foreach ($currentParams as $param => $value) {
                if (!in_array($param, $urlParams)) {
                    unset($currentParams[$param]);
                }
            }
            $currentParams[0] = '/' . Yii::$app->controller->getRoute();
            $url = Url::toRoute($currentParams);
        }

        $query = Ceo::find()->where(['url' => $url]);
        return $query->asArray()->one();
    }

}
