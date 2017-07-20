var CallButton = {
    sourceUrl:'',
    templateUrl:'',
    buttonIdentity: '.call-back-button',
    modalBlockId: 'call-back-modal-block',
    init: function () {
        if (!this.sourceUrl) {
            throw new Error('Set source path!');
        }
        this.templateUrl = this.sourceUrl + '/template/modal.tmpl.html';

        this.setButtonEvent();
    },
    setButtonEvent: function () {
        var _t = this;
        $('body').on('click', _t.buttonIdentity, function () {
            _t.loadModalTemplate(function (modal) {
                modal.modal('show');
            })
        })
    },

    loadModalTemplate: function (successCallback) {
        var _t = this,
            block = $('#'+_t.modalBlockId);
        if (block.length === 0) {
            block = $('<div>').attr('id', _t.modalBlockId);
            $('body').append(block);
        }
        block.loadTemplate(_t.templateUrl, {}, {
            success: function () {
                if (typeof successCallback === 'function') {
                    successCallback(block.find('.modal'));
                }
            }
        });
    }
};
