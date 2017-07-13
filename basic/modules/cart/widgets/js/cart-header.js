var CartHeader = {
    widgetId: 'cart-header-widget',
    updateUrl: '/cart/ajax/update-header-widget/',
    update: function () {
        var _t = this;
        $.ajax({
            url: _t.updateUrl,
            success: function (data) {
                var widgetSelector = '#'+_t.widgetId;
                data = $(data);
                if (data.is(widgetSelector)) {
                    var newWidgetData = data.children();
                } else {
                    var newWidgetData = data.find(widgetSelector).children();
                }
                if (newWidgetData.length > 0) {
                    $(widgetSelector).html(newWidgetData);
                }
            }
        });
    }
};