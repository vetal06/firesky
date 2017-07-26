<?php
\app\modules\cart\widgets\AddButtonAssets::register($this);
?>
<div class="product-buy__buttons ">
    <button class="product-buy__btn product-buy__btn--buy js-add-to-cart-button" data-product-id="<?=$productId?>">
        <?=Yii::t('app', 'Купить')?>
        <i class="button--loader hidden" data-button-loader="loader">
            <svg class="svg-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                     xlink:href="#svg-icon__refresh"></use>
            </svg>
        </i>
    </button>
</div>
