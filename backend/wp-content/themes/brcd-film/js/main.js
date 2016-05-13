jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    console.log('Causes stain, stay away~');

    $('.site-trigger > .fa').click(function() {
    	$('.main-navigation').toggleClass('toggled');
    });

    $('#hero-video').click(function () {
    	var this = $(this);
		if (this.paused) {
	        this.play(); 
		}
	    else {
	        this.pause(); 
	    }
    })
} );