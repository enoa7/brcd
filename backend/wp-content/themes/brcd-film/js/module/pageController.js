/** Page Controller **/

var Page = {
    init: function(settings) {
        Page.config = {
            mobileMenuTrigger: $('.site-trigger'),
            mobileMenuBars: $('#megamenu-bars'),
            barPlus: $('.section-trigger'),
        };

        $.extend(Page.config, settings);
        Page.mobileMenu(); // call the action
        Page.sectionTrigger();
        Modal.init();
        // VideoController.onReady(); // call video controller

    },
    mobileMenu: function() {
        Page.setupBars();
        var trigger = Page.config.mobileMenuTrigger;
        trigger.click(function() {
            $('body').toggleClass('menu-active');
        })
    },
    setupBars: function() {
        var trigger = Page.config.mobileMenuBars;
        var elem = ['one', 'two', 'three'];
        $.each(elem, function(i, value) {
            var html = $('<div class="bar-hamburger bar-hamburger-' + elem[i] + '"></div>');
            trigger.append(html);
        });
    },
    sectionTrigger: function() {
        var target = Page.config.barPlus;
        target.off('click').on('click', function(event) {
            event.stopPropagation();
            $(this).closest('.section-item').toggleClass('active');
        })
    }
};
