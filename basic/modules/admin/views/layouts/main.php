<?php
\app\modules\admin\assets\AdminAssets::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= \yii\helpers\Html::csrfMetaTags() ?>
  <title><?= \yii\helpers\Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

  <?= $this->render(
      'header.php',
      ['directoryAsset' => $directoryAsset]
  ) ?>

  <?= $this->render(
      'left.php',
      ['directoryAsset' => $directoryAsset]
  )
  ?>

  <?= $this->render(
      'content.php',
      ['content' => $content, 'directoryAsset' => $directoryAsset]
  ) ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
