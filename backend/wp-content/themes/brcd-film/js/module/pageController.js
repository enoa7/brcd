/** Page Controller **/

var Page = {
    init: function(settings) {
        Page.config = {
            mobileMenuTrigger: $('.site-trigger'),
            mobileMenuBars: $('#megamenu-bars')
        };

        $.extend(Page.config, settings);
        Page.mobileMenu(); // call the action
        VideoController.onReady(); // call video controller

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
        var bar = ['one', 'two', 'three'];
        $.each(bar, function(i, value){
            var html = $('<div class="bar-hamburger bar-hamburger-'+ bar[i] +'"></div>');
            trigger.append(html);
        });

    }

};
