<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/site.css',
        'css/final.min.css',
    ];
    public $js = [
        'js/vendor.min.js',
        'js/final.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\modules\callback\widgets\source\CallButtonAssets',
        'app\modules\cart\widgets\AddButtonAssets',
        'app\modules\cart\widgets\CartHeaderAssets',
        'app\modules\cart\widgets\OrderListAssets',
        'yii\widgets\ActiveFormAsset',
        'yii\widgets\PjaxAsset',
        'app\widgets\lazyload\LazyLoadAsset',
    ];
}
