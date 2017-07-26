var OrderList = {
    pjaxSelector: '#pjax-order-list',
    deleteOrderUrl: '/cart/ajax/delete-cart/',
    changeCountUrl: '/cart/ajax/change-count/',
    init: function () {
        this.setDeleteButtonEvent();
        this.setChangeCountEvent();
        this.setButtonQuanityEvent();
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
    setChangeCountEvent: function () {
        var _t = this;
        $('body').on('change', '.form-input__control--quantity', function () {
            var input = $(this),
                parrentRow = input.closest('.cart-summary__row'),
                cartId = parrentRow.data('cart-id')
                count = parseInt(input.val());
            $.ajax({
                url: _t.changeCountUrl,
                method: 'post',
                data: {cartId: cartId, count: count},
                success: function () {
                    _t.updateList();
                }
            });
        });
    },
    setButtonQuanityEvent: function () {
        $('body').on('click', '.form-input__group-btn', function () {
           var button = $(this),
               type = button.data('form-quantity-control'),
               input = button.closest('.form-input__group').find('.form-input__control--quantity');
           var val = parseInt(input.val());
           if (type == 'minus') {
               if (val >1) {
                   input.val(--val);
               }
           } else {
               input.val(++val);
           }
            input.trigger('change');
        });
    },
    updateList: function () {
        $.pjax.reload({container:this.pjaxSelector});

    }
};

$(function () {
    OrderList.init();
});