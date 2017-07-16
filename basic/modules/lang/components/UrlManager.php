<?php
namespace app\modules\lang\components;


use yii\helpers\Url;

class UrlManager extends \yii\web\UrlManager
{

    public function createUrl($params)
    {
        $lang = null;
        if( isset($params['lang']) && isset(\Yii::$app->params['languages']['list'][$params['lang']])){
            $lang = $params['lang'];
            unset($params['lang']);
        }

        if ($lang == \Yii::$app->params['languages']['default']) {
            $lang = null;
        }



        //Получаем сформированный URL(без префикса идентификатора языка)
        $url = parent::createUrl($params);

        if ($lang != null) {
            $lang = '/'.$lang;
        }


        if( $url == '/' ){
            return $lang == null? '/':$lang;
        }else{
            return $lang.$url;
        }
    }
}