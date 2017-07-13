<?php
namespace app\modules\cart\widgets;


use yii\web\AssetBundle;

class CartHeaderAssets extends AssetBundle
{

    public $css = [

    ];
    public $js = [
        'js/cart-header.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
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