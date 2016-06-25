var Modal = {

    init: function(settings) {

        Modal.config = {

            btnModal: $('button[data-toggle="modal"]')

        }

        $.extend(Modal.config, settings);
        Modal.loadModal();


    },

    loadModal: function() {
        var targetModal = Modal.config.btnModal;
        var html = '<div class="modal-container"></div>';
        targetModal.parent().append(html);
        targetModal.one('click', function(event) {
            event.stopPropagation();
            var get_url = $(this).attr('href');
            $('.modal-container').load(get_url).modal('show');
        });
    }

}
