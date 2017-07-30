
<?php $form = \yii\bootstrap\ActiveForm::begin();?>
    <?=$form->field($model, 'url')->textInput()?>
    <?=\yii\bootstrap\Html::submitButton('Далее')?>
<?php \yii\bootstrap\ActiveForm::end()?>
<?php if(!empty($ceoData)):?>
    <h2>Данные уже созданы</h2>
    <p><?=\yii\helpers\Html::a($ceoData['name'],['admin/default/update', 'url' => $ceoData['url']])?></p>
<?php endif;?>

