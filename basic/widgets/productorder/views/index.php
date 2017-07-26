<form method="get">
    <label class="catalog-toolbar__label hidden-xs hidden-sm hidden-md" for="catalog-sort-by">
        <?= $model->getAttributeLabel('order') ?>
    </label>
    <div class="catalog-toolbar__field">
        <?= \yii\helpers\Html::activeDropDownList($model, 'order', $model->getOrderAvailableValues(), $attributes) ?>
    </div>
</form>