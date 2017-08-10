$(function () {
    var lazyStart = function () {
        $("img.lazy").lazyload({
        });
    };

    $('body').on('pjax:success', function () {
        lazyStart();
    });
    lazyStart();
});