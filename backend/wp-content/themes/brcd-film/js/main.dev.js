(function($) {

    $(document).ready(function() {

        console.log('ohayou~');
        FastClick.attach(document.body); //instantiate fastclick
        Page.init(); //initialize the page

        var anchorLinks = $('.anchorlinks a');
        anchorLinks.click(function(event) {
        	event.preventDefault();
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

    })


})(jQuery);
