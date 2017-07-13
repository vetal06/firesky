<?php
    \app\modules\cart\widgets\CartHeaderAssets::register($this);
?>
<div id="cart-header-widget" class="cart-header">
    <div class="cart-header__aside">
        <a class="cart-header__ico  <?=($countProduct>0)?'':'cart-header__ico--empty'?> "
           href="<?=$cartUrl?>">
            <svg class="svg-icon">
                <use xlink:href="#svg-icon__cart"></use>
            </svg>
            <span class="cart-header__badge hidden-lg"><?=$countProduct?></span>
        </a>
    </div>
    <div class="cart-header__inner visible-lg">
        <div class="cart-header__title">
            <a class="cart-header__link <?=($countProduct>0)?'':'cart-header__link--empty'?>  "
               href="<?=$cartUrl?>"><?=Yii::t('app', 'Корзина')?></a>
        </div>
        <div class="cart-header__desc">
            <?=$cartDesc?>
        </div>
    </div>
</div>