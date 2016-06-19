/** Page Controller **/

var Page = {
    init: function(settings) {
        Page.config = {
            mobileMenuTrigger: $('.site-trigger'),
        };

        $.extend(Page.config, settings);
        Page.mobileMenu(); // call the action
        VideoController.onReady(); // call video controller

    },
    mobileMenu: function() {
        var trigger = Page.config.mobileMenuTrigger;
        trigger.click(function() {
            $('body').toggleClass('menu-active');
        })
    }
};
