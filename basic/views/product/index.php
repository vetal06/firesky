<?php
$this->title = "test";
?>
<div class="content">
    <div class="content__container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Product main data -->
                <div class="content__row" data-product-scope="">
                    <div class="row">
                        <!-- Product photo -->
                        <div class="col-sm-5">
                            <div class="product-photo" data-magnific-galley="" data-product-photo-scope="">
                                <!-- Main photo -->
                                <a class="product-photo__item product-photo__item--lg "
                                   href="<?= $model->getMainImageUrl() ?>"
                                   target="_blank" data-product-photo-link="" data-magnific-galley-main=""
                                   data-magnific-galley-title="<?= $model->name ?>"
                                   data-magnific-galley-close-text="Закрыть">
                                    <img class="product-photo__img"
                                         src="<?= $model->getMainImageUrl() ?>"
                                         alt="Детская кроватка Соня ЛД из экологически чистых материалов"
                                         title="Детская кроватка Соня ЛД из экологически чистых материалов"
                                         data-product-photo="" data-zoom-image-small=""
                                         data-zoom-image="http://unishopvertical.imagecmsdemo.net/uploads/shop/products/large/2abc3303a1e16da5395390df0f056f7f.jpg">
                                    <!-- Photo labels -->
                                    <?=$this->render('/category/_photo_labels', compact('model'))?>
                                </a>
                            </div>
                        </div>

                        <!-- Product intro -->
                        <div class="col-sm-7 col--spacer-xs">
                            <div class="content__header content__header--xs">
                                <h1 class="content__title"><?= $model->name ?></h1>
                            </div>
                            <div class="content__row">
                                <div class="product-intro">

                                    <div class="product-intro__purchase">

                                        <!-- Product price -->
                                        <div class="product-intro__price">
                                            <div class="product-price product-price--lg">

                                                <?php if($model->old_price >0):?>
                                                <!-- Discount -->
                                                <div class="product-price__item">
                                                    <div class="product-price__old">
                                                        <span class="product-price__item-cur"><?=Yii::$app->params['currency']?></span><span
                                                                class="product-price__item-value"
                                                                data-product-price--origin="data-product-price--origin"><?=$model->old_price?></span>
                                                    </div>
                                                </div>
                                                <?php endif;?>

                                                <?php if($model->price >0):?>
                                                <!-- Main Price -->
                                                <div class="product-price__item">
                                                    <div class="product-price__main">
                                                        <span class="product-price__item-cur"><?=Yii::$app->params['currency']?></span><span
                                                                class="product-price__item-value"
                                                                data-product-price--main="data-product-price--main"><?=$model->price?></span>
                                                    </div>
                                                </div>
                                                <?php else: ?>
                                                    <div class="product-price__item">
                                                        <?=Yii::t('app', 'Нет в наличии')?>
                                                    </div>
                                                <?php endif;?>
                                            </div>
                                        </div>

                                        <!-- Product add to cart buttons -->
                                        <?php if ($model->price > 0): ?>
                                        <div class="product-intro__buy">
                                            <div class="product-buy">
                                                <!-- Items in stock -->
                                                <div class="product-buy__available product-buy--product "
                                                     data-product-available="">
                                                    <form action="http://unishopvertical.imagecmsdemo.net/shop/cart/addProductByVariantId/18014"
                                                          method="get" data-product-button--form=""
                                                          data-product-button--path="http://unishopvertical.imagecmsdemo.net/shop/cart/api/addProductByVariantId"
                                                          data-product-button--variant="18014"
                                                          data-product-button--modal-url="http://unishopvertical.imagecmsdemo.net/shop/cart"
                                                          data-product-button--modal-template="includes/cart/cart_modal">

                                                        <!-- Input product quantity, you wish to buy -->
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

                                                        <!-- Add to cart button -->
                                                        <div class="product-buy__buttons " data-product-button--add=""
                                                             data-product-button-item="">
                                                            <button class="product-buy__btn product-buy__btn--buy"
                                                                    type="submit" data-product-button--loader="">
                                                                Купить <i class="button--loader hidden"
                                                                          data-button-loader="loader">
                                                                    <svg class="svg-icon">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="#svg-icon__refresh"></use>
                                                                    </svg>
                                                                </i>
                                                            </button>
                                                        </div>

                                                        <!-- Already in cart button -->
                                                        <div class="product-buy__buttons hidden"
                                                             data-product-button--view="" data-product-button-item="">
                                                            <a class="product-buy__btn product-buy__btn--in-cart"
                                                               href="http://unishopvertical.imagecmsdemo.net/shop/cart"
                                                               data-modal="includes/cart/cart_modal">В корзине</a>
                                                        </div>

                                                        <input type="hidden" name="redirect" value="cart">
                                                        <input type="hidden" value="ef6330c8ca9513f9aa2a61069ed1c772"
                                                               name="cms_token"></form>
                                                </div>

                                                <!-- No items available -->
                                                <div class="product-buy__unavailable  hidden"
                                                     data-product-unavailable="">
                                                    <div class="product-buy__unavailable-info">
                                                        Нет в наличии
                                                    </div>
                                                    <div class="product-buy__unavailable-notify">
                                                        <a class="product-buy__unavailable-link"
                                                           href="http://unishopvertical.imagecmsdemo.net/shop/ajax/getNotifyingRequest"
                                                           data-product-notify="17258"
                                                           data-product-notify-variant="18014" rel="nofollow">
                                                            Сообщить о появлении </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <?php endif; ?>

                                    </div>
                                    <!-- Product actions like wishlist and compare -->
                                    <div class="product-intro__actions">
                                        <div class="product-actions">

                                            <?php if ($model->price > 0): ?>
                                            <div class="product-actions__item " data-product-available="">
                                                <div class="product-actions__ico product-actions__ico--available">
                                                    <svg class="svg-icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#svg-icon__available"></use>
                                                    </svg>
                                                </div>
                                                <div class="product-actions__text product-actions__text--available">
                                                    Есть в наличии
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="product-actions__item hidden" data-product-unavailable="">
                                                <div class="product-actions__ico product-actions__ico--unavailable">
                                                    <svg class="svg-icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#svg-icon__close-bold"></use>
                                                    </svg>
                                                </div>
                                                <div class="product-actions__text product-actions__text--unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>

                                            <!-- Buy in one click button. Visible when module is installed -->

                                            <!-- Found less expensive module -->

                                            <!-- Price Spy module -->

                                            <!-- Wishlist buttons. Dont show button on whishlist page -->
                                            <div class="product-actions__item" data-ajax-inject="wishlist-link-18014">

                                                <div class="product-actions__ico product-actions__ico--wishlist">
                                                    <svg class="svg-icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#svg-icon__heart"></use>
                                                    </svg>
                                                </div>
                                                <!-- Text link, used in product page -->
                                                <a class="product-actions__link" href="/auth/login?wishlist=18014"
                                                   data-modal="" rel="nofollow">В избранные</a>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Product prev text description -->

                                </div><!-- /.product-intro -->              </div>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.content__row -->

                <!-- Product Full information -->
                <div class="content__row">
                    <div class="product-fullinfo">

                        <!-- Product full description -->
                        <div class="product-fullinfo__item">
                            <div class="product-fullinfo__header">
                                <div class="product-fullinfo__title"><?=Yii::t('app', 'Описание')?></div>
                            </div>
                            <div class="product-fullinfo__inner">
                                <?=$model->description?>
                            </div>
                        </div>


                        <!-- Product all properties -->
                        <div class="product-fullinfo__item">
                            <div class="product-fullinfo__header">
                                <div class="product-fullinfo__title">Характеристики</div>
                            </div>
                            <div class="product-fullinfo__inner">
                                <div class="properties">
                                    <?php $characteristics = $model->getCharacteristicsList()?>
                                    <?php foreach ($characteristics as $row):?>
                                    <div class="properties__item">
                                        <div class="properties__header">
                                            <div class="properties__wrapper">
                                                <div class="properties__title">
                                                    <span class="tooltip__label"><?=$row['name']?></span>
                                                </div><!-- /.properties__title -->
                                            </div>
                                        </div>
                                        <div class="properties__value"><?=$row['value']?></div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>


                        <!-- Product commetns -->
                        <div id="comments-list"></div>

                    </div><!-- /.product-fullinfo-->        </div>

            </div><!-- /.col -->


            <!-- Product sidebar -->
            <aside class="col-lg-3 visible-lg">
                <div class="content__sidebar">

                    <!-- Product shipping details: delivery and payment methods, contact phone etc -->
                    <div class="content__sidebar-item">
                        <div class="product-shipping">

                            <!-- Delivery Methods -->
                            <div class="product-shipping__row">
                                <div class="product-shipping__header">
        <span class="product-shipping__ico product-shipping__ico--delivery">
          <svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon__delivery"></use></svg>
        </span>
                                    <div class="product-shipping__title">
                                        <div class="tooltip">
                                            <span class="tooltip__label">Доставка</span>
                                            <div class="tooltip__position">
                                                <div class="tooltip__ico">
                                                    <svg class="svg-icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#svg-icon__tooltip"></use>
                                                    </svg>
                                                    <div class="tooltip__drop tooltip__drop--rtl">
                                                        <div class="tooltip__desc tooltip__desc--md">
                                                            <div class="typo">
                                                                <dl>
                                                                    <dt>Адресная доставка курьером</dt>
                                                                    <dd>
                                                                        <!-- Delivery Price is undefined -->
                                                                        <!-- Delivery Price is defined -->
                                                                        <div>
                                                                            Стоимость: $80<br>
                                                                            Бесплатно от: $5000
                                                                        </div>
                                                                        <!-- Delivery Description -->
                                                                        <p>Сроки доставки: 1-2 дня</p></dd>
                                                                    <dt>Доставка экспресс службой</dt>
                                                                    <dd>
                                                                        <!-- Delivery Price is undefined -->
                                                                        <div>
                                                                            согласно тарифам перевозчиков
                                                                        </div>
                                                                        <!-- Delivery Price is defined -->
                                                                        <!-- Delivery Description -->
                                                                        <p>Сроки доставки 2-3 дня</p></dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.tooltip -->
                                    </div><!-- /.product-shipping__title -->
                                </div><!-- /.product-shipping__header -->
                                <ul class="product-shipping__list">
                                    <li class="product-shipping__item">
                                        Адресная доставка курьером
                                    </li>
                                    <li class="product-shipping__item">
                                        Доставка экспресс службой
                                    </li>
                                </ul>
                            </div>
                            <!-- /.product-shipping__row -->

                            <!-- Payment Methods -->
                            <div class="product-shipping__row">
                                <div class="product-shipping__header">
        <span class="product-shipping__ico product-shipping__ico--payment">
          <svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#svg-icon__payment"></use></svg>
        </span>
                                    <div class="product-shipping__title">
                                        <div class="tooltip">
                                            <span class="tooltip__label">Оплата</span>
                                            <div class="tooltip__position">
                                                <div class="tooltip__ico">
                                                    <svg class="svg-icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#svg-icon__tooltip"></use>
                                                    </svg>
                                                    <div class="tooltip__drop tooltip__drop--rtl">
                                                        <div class="tooltip__desc tooltip__desc--md">
                                                            <div class="typo">
                                                                <dl>
                                                                    <dt>Наличными курьеру</dt>
                                                                    <dd><p>Оплата наличными курьеру</p></dd>
                                                                    <dt>Наложенным платежем</dt>
                                                                    <dt>Оплата через Банк</dt>
                                                                    <dt>Visa/Mastercard</dt>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.tooltip -->
                                    </div><!-- /.product-shipping__title -->
                                </div><!-- /.product-shipping__header -->
                                <ul class="product-shipping__list">
                                    <li class="product-shipping__item">
                                        Наличными курьеру
                                    </li>
                                    <li class="product-shipping__item">
                                        Наложенным платежем
                                    </li>
                                    <li class="product-shipping__item">
                                        Оплата через Банк
                                    </li>
                                    <li class="product-shipping__item">
                                        Visa/Mastercard
                                    </li>
                                </ul>
                            </div><!-- /.product-shipping__row -->

                            <!-- Phones -->
                            <div class="product-shipping__row">
                                <div class="product-shipping__header">
        <span class="product-shipping__ico product-shipping__ico--phone">
          <svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon__phone-big"></use></svg>
        </span>
                                    <div class="product-shipping__title">Возникли вопросы?</div>
                                </div>
                                <p class="product-shipping__desc">
                                    Звоните: <span class="product-shipping__phone">0 800 567-43-21</span><br>
                                    или <a class="site-info__link"
                                           href="http://unishopvertical.imagecmsdemo.net/callbacks"
                                           data-modal="callbacks_modal">мы сами Вам перезвоним</a>
                                </p>
                            </div>

                        </div><!-- /.product-shipping -->          </div>

                    <!-- Similar products -->

                </div>
            </aside><!-- /.col -->


        </div><!-- /.row -->

    </div><!-- /.content__container -->
</div><!-- /.content -->