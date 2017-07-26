<div class="content__container" data-cart-scope="" data-ajax-inject="cart-empty">

    <div class="content__header">
        <h1 class="content__title">
            Оформление заказа </h1>
    </div>

    <div class="row">

        <!-- Order cart -->
        <div class="col-sm-6 col-sm-push-6 col-md-7 col-lg-6 col-md-push-5 col-lg-push-6">
            <?=$this->render('_order-list', compact('cartList'))?>
        </div>

        <!-- Order form -->
        <div class="col-sm-6 col-sm-pull-6 col-md-5 col-lg-6 col-md-pull-7 col-lg-pull-6 col--spacer-xs">
            <div class="content__row">
                <?=$this->render('_order-form', compact('model'))?>
            </div>
        </div>

    </div>


</div>