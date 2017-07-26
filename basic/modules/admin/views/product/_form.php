<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form row">

    <?php $form = ActiveForm::begin(); ?>
  <div class="col-md-6">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-6">
    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-6">
    <?= $form->field($model, 'fk_category_id')->dropDownList(\app\models\Category::getDropDownList(), ['prompt' => '']) ?>
  </div>
  <div class="col-md-6">
    <?= $form->field($model, 'price')->textInput() ?>
  </div>
  <div class="col-md-6">
    <?= $form->field($model, 'old_price')->textInput() ?>
  </div>
  <div class="col-md-12">
      <label>Характеристики:</label>
      <?php foreach ($characteristicList as $char):?>
          <?= $form->field($model, "characteristics[{$char->key}]")->label($char->name)->textInput() ?>
      <?php endforeach;?>

  </div>
  <div class="col-md-12">
    <?php foreach ($model->getAllImagesUrl() as $image):?>
      <div class="col-md-4 "><?=Html::img($image, ['class' => 'form-product-image'])?></div>
    <?php endforeach; ?>
  </div>
  <div class="col-md-12">
    <?= $form->field($model, 'fileImage')->fileInput() ?>
  </div>
  <div class="col-md-12">
    <?= $form->field($model, 'youtube_url')->textInput() ?>
  </div>
  <div class="col-md-12">
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
  </div>
  <div class="col-md-12">
    <?= $form->field($model, 'is_available')->checkbox() ?>
  </div>


    <div class="form-group col-md-12">
        <?= Html::submitButton($model->isNewRecord ? 'Дбавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
