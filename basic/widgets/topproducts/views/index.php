<section class="widget-primary" data-slider="widget-primary">
    <div class="widget-primary__title"><?=Yii::t('app', $title)?></div>
    <div class="widget-primary__inner">
        <div class="row row--ib row--vindent-m" data-slider-slides="1,2,3,5">
            <?php
            foreach ($products as $model) {
                echo $this->render('_product_item', compact('model'));
            }
            ?>
        </div>
    </div>
    <div class="widget-primary__arrow widget-primary__arrow--left hidden" data-slider-arrow-left>
        <svg class="svg-icon"><use xlink:href="#svg-icon__arrow-big-left"></use></svg>
    </div>
    <div class="widget-primary__arrow widget-primary__arrow--right hidden" data-slider-arrow-right>
        <svg class="svg-icon"><use xlink:href="#svg-icon__arrow-big-right"></use></svg>
    </div>
</section>