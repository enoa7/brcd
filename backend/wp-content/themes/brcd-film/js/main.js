/* Description
 * makeToggle accept 3 arguments:
 * clickArea  => what you need to click to trigger it
 * targetArea => the targeted DOM
 * toggledCLass => class toggle */

function makeToggle(clickArea, targetArea, toggledClass) {

    var func_num_args = arguments.length;

    if (func_num_args == 3) {
        $(clickArea).click(function() {
            $(targetArea).toggleClass(toggledClass);
        });
    } else if (func_num_args < 3) {
        toggledClass = 'active';
        $(clickArea).click(function(){
            $(this).toggleClass(toggledClass);
        });
    }
}

jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
    console.log('Causes stain, stay away~');

    // menu toggle for mobile
    $('.site-trigger').click(function() {
        $('body').toggleClass('menu-active');
    });

    // controls for video on homepage
    $('#hero-video').click(function() {
        var this = $(this);
        if (this.paused) {
            this.play();
        } else {
            this.pause();
        }
    });

    /** controller for the post gallery ------------------ **/
    var gallery_theatre = $('.category-item #hero-gallery .entry-gallery-theatre > img');
    var gallery_img = $('.category-item #hero-gallery .item-img');

    gallery_img.click(function() {
        var imgUrl = $(this).attr('src');
        var newUrl = imgUrl.replace('-300x200', '');
        gallery_theatre.attr('src', newUrl);
    });
    /** end ------------------ **/

    makeToggle('.item-package', 'content-active');

});
