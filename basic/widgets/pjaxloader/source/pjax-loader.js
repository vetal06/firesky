var PjaxLoader = {
    blockId: 'pjax-block-id',
    blockImgSrc: '/uploads/images/loader.gif',

    init: function () {
        var _t = this;
        $(document).on('pjax:send', function() {
            _t.startLoader();
        });
        $(document).on('pjax:complete', function() {
            setTimeout(function () {
                _t.stopLoader();
            }, 900);
        });
    },
    startLoader: function () {
        var block = this.getBlock();
        block.show();
    },
    stopLoader: function () {
        var block = this.getBlock();
        block.hide();
    },
    getBlock: function () {
        var block = $('#'+this.blockId);
        if (block.length == 0) {
            block = $('<div>').attr('id', this.blockId);
            block.append($('<img>').attr('src', this.blockImgSrc));
            $('body').append(block);
        }
        return block;
    }
};
$(function () {
    PjaxLoader.init();
})