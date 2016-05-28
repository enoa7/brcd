jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    console.log('Causes stain, stay away~');

    // menu toggle for mobile
    $('.site-trigger > .fa').click(function() {
    	$('.main-navigation').toggleClass('toggled');
    });

    // controls for video on homepage
    $('#hero-video').click(function () {
    	var this = $(this);
		if (this.paused) {
	        this.play(); 
		}
	    else {
	        this.pause(); 
	    }
    });

    /** controller for the post gallery ------------------ **/
    var gallery_theatre = $('.category-item #hero-gallery .entry-gallery-theatre > img');
    var gallery_img = $('.category-item #hero-gallery .item-img');
    
    gallery_img.click(function(){
        var imgUrl = $(this).attr('src');
        var newUrl = imgUrl.replace('-300x200', '');
        gallery_theatre.attr('src', newUrl);
    });
    /** end ------------------ **/
} );