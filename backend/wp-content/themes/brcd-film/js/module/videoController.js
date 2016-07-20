var HeroContent = (function() {

    var selectVideo = '#hero-video';
    var selectBanner = '.hero-content';

    var videoController = function() {

        $(selectVideo).click(function() {

            if ($(selectVideo)[0].paused) {
                $(selectVideo)[0].play();
            } else {
                $(selectVideo)[0].pause();
            }

        });
    };

    var bannerController = function() {

        $(selectBanner).slick();

    }

    return {
        videoController: videoController,
        bannerController: bannerController
    };

})();

(function(){

    $(document).ready(function(){
        HeroContent.videoController();
        HeroContent.bannerController();
    });

})();
