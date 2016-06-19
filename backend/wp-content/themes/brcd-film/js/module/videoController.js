/** Video Controller **/

var VideoController = {
    onReady: function(settings) {
        VideoController.config = {
            container: $('#hero-video'),
        };

        $.extend(VideoController.config, settings);
        VideoController.UIAction(); // call the action
        
    },
    UIAction: function() {
    	var video = VideoController.config.container;
    	video.click(function() {
    		if(video[0].paused) {
    			video[0].play();
    		} else {
    			video[0].pause();
    		}
    	})
	}
};
