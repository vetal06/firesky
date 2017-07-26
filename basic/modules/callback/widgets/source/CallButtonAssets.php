<?php
namespace app\modules\callback\widgets\source;
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 20.07.2017
 * Time: 22:03
 */
class CallButtonAssets extends \yii\web\AssetBundle
{
    public $css = [

    ];
    public $js = [
        'js/call-button.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        '\yii\bootstrap\BootstrapPluginAsset',
        'app\modules\callback\widgets\source\LoadTemplateAssets',
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