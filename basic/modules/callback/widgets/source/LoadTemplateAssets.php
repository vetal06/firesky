<?php
namespace app\modules\callback\widgets\source;

/**
 * Class LoadTemplateAssets
 * @package app\modules\callback\widgets\source
 */
class LoadTemplateAssets extends \yii\web\AssetBundle
{
    public $js = [
        'js/jquery.loadTemplate.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        $this->sourcePath  = __DIR__;
    }
}