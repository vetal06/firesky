<?php
namespace app\widgets\lazyload;

class LazyLoadAsset extends \yii\web\AssetBundle
{

    public $js = [
        'jquery.lazyload.js',
        'init.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
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