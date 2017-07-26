<?php
\app\modules\cart\widgets\AddButtonAssets::register($this);
?>
<div class="group-elements">
    <?php if($productExistInCart): ?>
        <div class="product-buy__buttons">
            <a class="product-buy__btn product-buy__btn--in-cart"
               href="/cart/default/"><?=Yii::t('app', 'В корзине')?></a>
        </div>
    <?php else: ?>
    <div class="product-buy__quantity "
         data-product-button--quantity=""
         data-product-button-item="">

        <div class="form-input form-input--product-base"
             data-form-quantity="">
            <div class="form-input__group">
                <div class="form-input__group-item">
                    <button class="form-input__group-btn"
                            type="button"
                            data-form-quantity-control="minus">-
                    </button>
                </div>
                <input class="form-input__control form-input__control--quantity"
                       type="text" name="quantity"
                       autocomplete="off" value="1"
                       data-cart-summary--quantity-field=""
                       data-form-quantity-field=""
                       data-form-quantity-step="1">
                <div class="form-input__group-item">
                    <button class="form-input__group-btn"
                            type="button"
                            data-form-quantity-control="plus">+
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="product-buy__buttons ">
        <button class="product-buy__btn product-buy__btn--buy js-add-to-cart-button"
                data-product-id="<?= $productId ?>">
            <?= Yii::t('app', 'Купить') ?>
            <i class="button--loader hidden" data-button-loader="loader">
                <svg class="svg-icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                         xlink:href="#svg-icon__refresh"></use>
                </svg>
            </i>
        </button>
    </div>
    <?php endif;?>

</div>
