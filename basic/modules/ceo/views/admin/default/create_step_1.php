
<?php $form = \yii\bootstrap\ActiveForm::begin();?>
    <?=$form->field($model, 'url')->textInput()?>
    <?=\yii\bootstrap\Html::submitButton('Далее')?>
<?php \yii\bootstrap\ActiveForm::end()?>
<?php if(!empty($ceoDataList)):?>
    <h2>Данные уже созданы</h2>
    <?php foreach ($ceoDataList as $ceo):?>
        <p><?=\yii\helpers\Html::a($ceo->name,['admin/default/update', 'route_name' => $ceo->route_name, 'route_parameters' => $ceo->route_parameters])?></p>
    <?php endforeach;?>
<?php endif;?>

