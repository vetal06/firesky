<?php
namespace app\widgets\pjaxloader\source;

class PjaxLoaderAssets extends \yii\web\AssetBundle
{
    public $css = [
        'pjax-loader.css'
    ];
    public $js = [
        'pjax-loader.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\widgets\PjaxAsset',
    ];

    public $publishOptions = [
        'forceCopy' => true,
    ];

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        $this->sourcePath  = __DIR__;
    }
}