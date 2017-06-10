<?php
namespace app\modules\ceo\widgets;

use app\modules\ceo\models\Ceo;
use app\modules\page\models\Page;
use yii\base\Exception;
use yii\db\Expression;
use yii\helpers\Html;
use yii\helpers\Json;


/**
 * Виджет сео текстов на странице и мета ладнных
 * Class CeoWidget
 * @package app\modules\ceo\widgets
 */
class CeoWidget extends \yii\base\Widget
{

    const TYPE_TEXT = 'text';
    const TYPE_META = 'meta';
    public $type;

    private static $ceoModel;

    public function run()
    {
        if ($this->type != self::TYPE_META && $this->type != self::TYPE_TEXT) {
            throw new Exception('Change widget type!');
        }
        $model = $this->findModel();
        if (!empty($model)) {
            if ($this->type == self::TYPE_TEXT) {
                return $model->ceo_text;
            }
            if ($this->type == self::TYPE_META) {
                $res = "";
                $res .= Html::tag('title', $model->title);
                $res .= Html::tag('meta', '', [
                    'name' => 'keywords',
                    'content' => $model->meta_keywords
                ]);
                $res .= Html::tag('meta', '', [
                    'name' => 'description',
                    'content' => $model->meta_description
                ]);
                return $res;
            }
        }
    }

    /**
     * Поиск нужной модели с сео данными
     * @return mixed
     */
    private function findModel()
    {
        if (self::$ceoModel == null) {
            $routeName = \Yii::$app->controller->route;
            $routeParams = \Yii::$app->controller->actionParams;
            if (empty($routeParams)) {
                $paramsEncode = '{}';
            } else {
                $paramsEncode = Json::encode($routeParams);
            }
            $query = Ceo::find()->where(['route_name' => $routeName])
                ->andWhere(new Expression("route_parameters @> :params", [":params" => $paramsEncode]));
            self::$ceoModel = $query->one();
        }
        return self::$ceoModel;
    }

}