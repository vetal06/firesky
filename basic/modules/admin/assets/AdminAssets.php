<?php
namespace app\modules\admin\assets;

/**
 * Class AdminAssets
 * @package app\modules\admin
 */
class AdminAssets extends \yii\web\AssetBundle
{

  public $css = [

  ];
  public $js = [
  ];
  public $depends = [
      'yii\web\JqueryAsset',
      'yii\bootstrap\BootstrapAsset',
      'dmstr\web\AdminLteAsset',
  ];
}