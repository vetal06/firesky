<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 26.06.2017
 * Time: 23:31
 */

namespace app\modules\cart\widgets;


use yii\web\AssetBundle;

class OrderListAssets extends AssetBundle
{

    public $css = [

    ];
    public $js = [
        'js/order-list.js',
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