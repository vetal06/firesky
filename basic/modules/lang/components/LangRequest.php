<?php
namespace app\modules\lang\components;


use yii\web\Request;

// PS: https://habrahabr.ru/post/226931/
class LangRequest extends Request
{
    private $_lang_url;
    public $currentLang = 'ru';


    public function getUrl()
    {
        if ($this->_lang_url === null) {
            $this->_lang_url = parent::getUrl();

            $url_list = explode('/', $this->_lang_url);

            $lang_url = isset($url_list[1]) ? $url_list[1] : null;
            if (isset(\Yii::$app->params['languages']['list'][$lang_url])) {
                $this->currentLang = $lang_url;
            } else {
                $this->currentLang = \Yii::$app->params['languages']['default'];
            }

            if( $lang_url !== null && $lang_url === $this->currentLang &&
                strpos($this->_lang_url, $this->currentLang) === 1 )
            {
                $this->_lang_url = substr($this->_lang_url, strlen($this->currentLang)+1);
            }
            \Yii::$app->language = $this->currentLang;
        }
        return $this->_lang_url;
    }

}