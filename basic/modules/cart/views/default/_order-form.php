<!-- Ordering form -->
<?php
$form = \yii\bootstrap\ActiveForm::begin([
    'layout' => 'horizontal',
]);
?>
<?=$form->field($model, 'user_name')->textInput(['class' => 'form-control'])?>
<?=$form->field($model, 'user_email')->textInput(['class' => 'form-control'])?>
<?=$form->field($model, 'user_phone')->textInput(['class' => 'form-control'])?>
<?=$form->field($model, 'delivery_type')->radioList($model->getDeliveryTypes())?>
<?=$form->field($model, 'payment_type')->radioList($model->getPaymentTypes())?>
<?=$form->field($model, 'delivery_address')->textInput(['class' => 'form-control'])?>
<?=$form->field($model, 'comment')->textarea(['rows' => 4, 'class' => 'form-control'])?>
<!-- Submit button -->
<div class="form__field form__field--hor form__field--hor-lg">
    <div class="form__label"></div>
    <div class="form__inner">
        <input class="btn btn-primary btn-lg" type="submit" value="Подтвердить заказ">
    </div>
</div>
</div>
<?php \yii\bootstrap\ActiveForm::end()?>