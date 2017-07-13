var OrderList = {
    pjaxSelector: '#pjax-order-list',
    deleteOrderUrl: '/cart/ajax/delete-cart/',
    init: function () {
        this.setDeleteButtonEvent();
    },
    setDeleteButtonEvent: function () {
        var _t = this;
        $('body').on('click', '.cart-summary__delete', function () {
           var button = $(this),
               parrentRow = button.closest('.cart-summary__row'),
               cartId = parrentRow.data('cart-id');
            $.ajax({
                url: _t.deleteOrderUrl,
                method: 'post',
                data: {cartId: cartId},
                success: function () {
                    _t.updateList();
                }
            });
        });
    },
    updateList: function () {
        $.pjax.reload({container:this.pjaxSelector});

    }
};

$(function () {
    OrderList.init();
});