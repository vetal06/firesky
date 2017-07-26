var CallButton = {
    sourceUrl:'',
    templateUrl:'',
    buttonIdentity: '.call-back-button',
    modalBlockId: 'call-back-modal-block',
    ajaxUrl: '/callback/api/add-phone/',
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
                _t.setSubmitModalFormEvent(modal.find('form'));
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
    },

    setSubmitModalFormEvent: function (form) {
        var _t = this;
        form.on('submit', function () {
            $.ajax({
                url: _t.ajaxUrl,
                method: 'POST',
                data: form.serialize(),
                success: function () {
                    form.closest('.modal').modal('hide');
                }
            });
            return false;
        })
    }
};
