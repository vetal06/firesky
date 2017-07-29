<?php
namespace app\modules\ceo\components;

use yii\helpers\VarDumper;

class UrlParser
{

    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function parse()
    {
        $request = new Request();
        $request->setRequestUri($this->url);
        $result = \Yii::$app->getUrlManager()->parseRequest($request);
        $name = $result[0];
        $params = $result[1];
        return [
            'name' => $name,
            'params' => $params,
        ];
    }
}