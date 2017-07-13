var AddButton = {
    ajaxUrl: '/cart/ajax/add-product/',
    init: function () {
        this.setButtonEvent();
    },
    setButtonEvent: function () {
        var _t = this;
        $('body').on('click', '.js-add-to-cart-button', function () {
            var button = $(this),
                productId = button.data('product-id'),
                productCountElement = button.closest('.group-elements').find('input[name="quantity"]'),
                productCount = 1;
            if (productCountElement.length > 0) {
                productCount = parseInt(productCountElement.val());
            }
            _t.showLoader(button);
            $.ajax({
                method: 'POST',
                url: _t.ajaxUrl,
                data: {
                    productId: productId,
                    count: productCount,
                    _crsf: yii.getCsrfToken()
                },
                success: function (data) {
                    CartHeader.update();
                },
                complete: function () {
                    _t.hideLoader(button);
                }
            })
        });
    },
    showLoader: function (button) {
        button.addClass('disabled');
        button.find('.button--loader').removeClass('hidden');
    },
    hideLoader: function (button) {
        button.removeClass('disabled');
        button.find('.button--loader').addClass('hidden');
    }
};
$(function () {
    AddButton.init();
});