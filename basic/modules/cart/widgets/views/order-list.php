<?php
\app\modules\cart\widgets\OrderListAssets::register($this);
$totalPrice = 0;
?>
<?php \yii\widgets\Pjax::begin(['id' => 'pjax-order-list']);?>
<div class="cart-frame__inner">
    <div class="cart-summary ">

        <div class="cart-summary__items">
            <?php
            foreach ($cartList as $cart):
                $totalPrice += $cart->count * $cart->product->price;
                ?>
                <div class="cart-summary__row" data-cart-id="<?=$cart->id?>">
                    <!-- Delete kit of product -->
                    <div class="cart-summary__cell cart-summary__cell--delete">
                        <div class="cart-summary__delete">
                            <a class="cart-summary__delete-icon" href="#">
                                <svg class="svg-icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#svg-icon__delete"></use>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Product kit -->
                    <div class="cart-summary__cell">
                        <div class="cart-summary__product">
                            <div class="cart-product">
                                <div class="cart-product__photo">

                                    <div class="product-photo">
                                        <a class="product-photo__item product-photo__item--xs"
                                           href="<?= $cart->product->getUrl() ?>">
                                            <img class="product-photo__img"
                                                 src="<?= $cart->product->getMainImageUrl() ?>"
                                                 alt="<?= $cart->product->name ?>"
                                                 title="<?= $cart->product->name ?>">
                                        </a>
                                    </div>

                                </div><!-- /.__photo -->

                                <div class="cart-product__info">

                                    <!-- Product title -->
                                    <div class="cart-product__title">
                                        <a class="cart-product__link"
                                           href="<?= $cart->product->getUrl() ?>"><?= $cart->product->name ?></a>
                                    </div>
                                </div><!-- /.__info -->

                            </div><!-- /.__product -->        </div>
                    </div>
                    <!-- END Including products -->


                    <!-- Quantity of product -->
                    <div class="cart-summary__cell">
                        <form class="cart-summary__quantity">
                            <div class="form-input " data-form-quantity="" data-form-quantity-submit="">
                                <div class="form-input__group">
                                    <div class="form-input__group-item">
                                        <button class="form-input__group-btn" type="button"
                                                data-form-quantity-control="minus">-
                                        </button>
                                    </div>
                                    <input class="form-input__control form-input__control--quantity"
                                           type="text" name="quantity" autocomplete="off" value="<?=$cart->count?>"
                                           data-cart-summary--quantity-field="" data-form-quantity-field=""
                                           data-form-quantity-step="1">
                                    <div class="form-input__group-item">
                                        <button class="form-input__group-btn" type="button"
                                                data-form-quantity-control="plus">+
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <!-- Product Price -->
                    <div class="cart-summary__cell">
                        <div class="cart-summary__price">

                            <div class="cart-price">
                                <div class="cart-price__main cart-price__main--small">
                                    <span class="cart-price__main-value"><?=$cart->count * $cart->product->price?></span>
                                    <span class="cart-price__main-cur"><?=Yii::$app->params['currency']?></span>
                                </div>
                            </div>

                        </div>
                    </div>


                </div><!-- /.__row -->
            <?php endforeach; ?>
        </div><!-- /.__items -->



        <div class="cart-summary__total">
            <div class="cart-summary__total-price cart-summary__total-price--order">
                <div class="cart-summary__total-label">
                    К оплате
                </div>
                <div class="cart-summary__total-value">
                    <div class="cart-price">
                        <div class="cart-price__main cart-price__main--lg">
                            <span class="cart-price__main-value"><?=$totalPrice?></span>
                            <span class="cart-price__main-cur"><?=Yii::$app->params['currency']?></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- /.cart-summary -->
</div>
<?php \yii\widgets\Pjax::end()?>