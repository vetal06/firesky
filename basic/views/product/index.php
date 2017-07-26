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
                                         alt="<?=$model->name?>"
                                         title="<?=$model->name?>"
                                        >
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
                                                <div class="product-buy__available product-buy--product">
                                                        <!-- Add to cart button -->
                                                    <?=\app\modules\cart\widgets\AddButtonWidget::widget([
                                                            'productId' => $model->id,
                                                            'template' => 'add-button-with-count',
                                                        ])?>

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

                        <?php if(!empty($model->youtube_url)):?>
                        <div class="product-fullinfo__item">
                            <div class="product-fullinfo__header">
                                <div class="product-fullinfo__title"><?=Yii::t('app', 'Видео')?></div>
                            </div>
                            <div class="product-fullinfo__inner">
                                <iframe width="640" height="360" src="<?=$model->youtube_url?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <?php endif;?>


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
                                        <div class="properties__value"><?=$row['value']?> <?=$row['unit']?></div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>


                        <!-- Product commetns -->
                        <div id="comments-list"></div>

                    </div><!-- /.product-fullinfo-->
                </div>

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
                                    Звоните: <span class="product-shipping__phone"><?=Yii::$app->params['phone']?></span><br>
                                    или <?=\app\modules\callback\widgets\CallButton::widget()?>
                                </p>
                            </div>

                        </div><!-- /.product-shipping -->          </div>

                    <!-- Similar products -->

                </div>
            </aside><!-- /.col -->


        </div><!-- /.row -->

    </div><!-- /.content__container -->
</div><!-- /.content -->