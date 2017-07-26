<?php
namespace app\modules\cart\widgets;

class AddButtonAssets extends \yii\web\AssetBundle
{

    public $css = [

    ];
    public $js = [
        'js/add-button.js',
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