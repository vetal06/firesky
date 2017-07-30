<?php
namespace app\modules\lang\components;


class UrlManager extends \yii\web\UrlManager
{

    private $lang;

    public function createUrl($params)
    {
        if( isset($params['lang']) && isset(\Yii::$app->params['languages']['list'][$params['lang']])){
            $this->lang = $params['lang'];
            unset($params['lang']);
        } else {
            $this->lang = \Yii::$app->language;
        }

        $langUrl = $this->lang;
        if ($langUrl == \Yii::$app->params['languages']['default']) {
            $langUrl = null;
        }



        //Получаем сформированный URL(без префикса идентификатора языка)
        $url = parent::createUrl($params);

        if ($langUrl != null) {
            $langUrl = '/'.$langUrl;
        }


        if( $url == '/' ){
            return $langUrl == null? '/':$langUrl;
        }else{
            return $langUrl.$url;
        }
    }

    public function parseRequest($request)
    {
        $res = parent::parseRequest($request);
        if (is_array($res) && empty($res[1]['lang'])) {
            $res[1]['lang'] = $request->currentLang;
        }
        return $res;
    }
}