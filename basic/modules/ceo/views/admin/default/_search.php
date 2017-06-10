<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\ceo\models\CeoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ceo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'route_name') ?>

    <?= $form->field($model, 'route_parameters') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'ceo_text') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'meta_keywords') ?>

    <?php // echo $form->field($model, 'meta_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
