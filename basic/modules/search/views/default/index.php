<?php
$models = $dataProvider->getModels();
?>
<div class="content__header">
    <h1 class="content__title"><?=Yii::t('app', 'Результат поиска')?> </h1>
    <span class="content__hinfo">
            <?=Yii::t('app', 'Найдено')?>:
        <i class="content__hinfo-number"><?=$dataProvider->getTotalCount()?></i>
        <?=Yii::t('app', 'товаров')?>
      </span>
</div>
<?php if (empty($models)): ?>
    <h1><?=Yii::t('app', 'Товар не найден')?></h1>
<?php else:?>
    <?php foreach ($models as $model):?>
        <?=$this->render('//category/_product_item', compact('model'))?>
    <?php endforeach;?>
    <?=\yii\widgets\LinkPager::widget([
            'pagination' => $dataProvider->getPagination(),
    ])?>
<?php endif; ?>


