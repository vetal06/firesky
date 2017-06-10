<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
  <article class="product-cut " data-product-scope="">

    <!-- Block visible once page is loaded -->
    <div class="product-cut__main-info">

      <!-- Photo output BEGIN -->
      <div class="product-cut__photo">
        <div class="product-photo">
          <button class="product-photo__item" type="button"
                  data-product-photo-href="<?=$model->getUrl()?>">
            <img class="product-photo__img"
                 src="<?=$model->getMainImageUrl()?>"
                 alt="Детская кроватка Соня ЛД из экологически чистых материалов"
                 title="Детская кроватка Соня ЛД из экологически чистых материалов" data-product-photo="">
            <!-- Photo labels -->
            <?=$this->render('_photo_labels',compact('model'))?>
          </button>
        </div>
      </div>

      <!-- Title BEGIN -->
      <div class="product-cut__title">
        <?= \yii\helpers\Html::a(Yii::t('app', $model->name), $model->getUrl(), ['class' => 'product-cut__title-link']) ?>
      </div>

      <!-- If product is not archived -->
      <!-- Product price -->
      <div class="product-cut__price">
        <div class="product-price product-price--bg">

          <?php if($model->old_price >0):?>
          <!-- Discount -->
          <div class="product-price__item">
            <div class="product-price__old">
              <span class="product-price__item-cur"><?=Yii::$app->params['currency']?></span>
              <span class="product-price__item-value" ata-product-price--origin="data-product-price--origin">
                <?=$model->old_price?>
              </span>
            </div>
          </div>
          <?php endif;?>

          <?php if($model->price >0):?>
          <!-- Main Price -->
          <div class="product-price__item">
            <div class="product-price__main">
              <span class="product-price__item-cur"><?=Yii::$app->params['currency']?></span>
              <span class="product-price__item-value" data-product-price--main="data-product-price--main">
                <?=$model->price?>
              </span>
            </div>
          </div>
          <?php else: ?>
            <div class="product-price__item">
              <?=Yii::t('app', 'Нет в наличии')?>
            </div>
          <?php endif;?>


        </div>
      </div>

      <!-- Delete item from wishlist -->

      <!-- Move item between wishlists -->

      <!-- If archived product -->

      <!-- Block hidden at once, visible on hover -->
      <div class="product-cut__extra-info">

        <div class="product-cut__actions">
          <div class="product-cut__action-item">
            <!-- Product "add to cart" and "already in cart" buttons -->
            <?php if ($model->price > 0):?>
            <div class="product-buy">
              <!-- Items in stock -->
              <div class="product-buy__available  " data-product-available="">
                <form action="http://unishopvertical.imagecmsdemo.net/shop/cart/addProductByVariantId/18014"
                      method="get" data-product-button--form=""
                      data-product-button--path="http://unishopvertical.imagecmsdemo.net/shop/cart/api/addProductByVariantId"
                      data-product-button--variant="18014"
                      data-product-button--modal-url="http://unishopvertical.imagecmsdemo.net/shop/cart"
                      data-product-button--modal-template="includes/cart/cart_modal">

                  <!-- Input product quantity, you wish to buy -->

                  <!-- Add to cart button -->
                  <div class="product-buy__buttons " data-product-button--add="" data-product-button-item="">
                    <button class="product-buy__btn product-buy__btn--buy" type="submit"
                            data-product-button--loader="">
                      Купить <i class="button--loader hidden" data-button-loader="loader">
                        <svg class="svg-icon">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink"
                               xlink:href="#svg-icon__refresh"></use>
                        </svg>
                      </i>
                    </button>
                  </div>

                  <!-- Already in cart button -->
                  <div class="product-buy__buttons hidden" data-product-button--view=""
                       data-product-button-item="">
                    <a class="product-buy__btn product-buy__btn--in-cart"
                       href="http://unishopvertical.imagecmsdemo.net/shop/cart"
                       data-modal="includes/cart/cart_modal">В корзине</a>
                  </div>

                  <input type="hidden" name="redirect" value="cart">
                  <input type="hidden" value="cd85ce1c4d0e91c16956e6571049aa4b" name="cms_token"></form>
              </div>

              <!-- No items available -->
              <div class="product-buy__unavailable  hidden" data-product-unavailable="">
                <div class="product-buy__unavailable-info">
                  Нет в наличии
                </div>
                <div class="product-buy__unavailable-notify">
                  <a class="product-buy__unavailable-link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/ajax/getNotifyingRequest"
                     data-product-notify="17258" data-product-notify-variant="18014" rel="nofollow">
                    Сообщить о появлении </a>
                </div>
              </div>

            </div>
            <?php endif; ?>
          </div>
          <div class="product-cut__action-item" data-ajax-inject="wishlist-btn-18014">
            <!-- Wishlist buttons. Dont show button on whishlist page -->


            <!-- Button link, used in catalog page -->
            <a class="btn-white" href="/auth/login?wishlist=18014" data-modal="" rel="nofollow">
              <i class="btn-white__ico btn-white__ico--wishlist">
                <svg class="svg-icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon__heart"></use>
                </svg>
              </i>
            </a>

          </div>
        </div><!-- /.product-cut__buttons -->

      </div>
      <!-- /.product-cut__extra-info -->

    </div><!-- /.product-cut__main-info -->
  </article>
</div>