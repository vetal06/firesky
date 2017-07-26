<?php
$bundle = \app\modules\callback\widgets\source\CallButtonAssets::register($this);
$js = <<<JS
    $(function () {
        CallButton.sourceUrl = '{$bundle->baseUrl}';
        CallButton.init();
    });
JS;

$this->registerJs($js);

echo \yii\helpers\Html::a(Yii::t('app', 'Обратный звонок'), '#', [
        'class' => 'call-back-button',
        'rel' => 'nofollow',
])
?>