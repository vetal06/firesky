<div class="cart-frame">
    <div class="cart-frame__header">
        <div class="cart-frame__title">Подробности заказа</div>
    </div>
    <?=\app\modules\cart\widgets\OrderListWidget::widget(['cartList' => $cartList])?>
</div>