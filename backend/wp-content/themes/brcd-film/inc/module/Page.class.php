<?php  

/*
 *	@
 */

class Page {

	// global $post;

	public function __construct() {}

	public function get_attachment() {

		$id = get_the_ID();
		// get the pages attachments
		$attachments = get_posts( array(
		    'post_type'   => 'attachment',
		    'post_parent' => $id
		));

		if (have_posts()) {
			while(have_posts()) {
				the_post();
				if($attachments) {
					foreach($attachments as $attachment) {

						$banner = wp_get_attachment_image( $attachment->ID, 'mainBanner_lg' );
						echo $banner;

					}
				}
			}
		}

	}

	public function display_banner() {

		$attachment = $this->get_attachment();
		// $html  = '<div class="item-list">'. $attachment .'</div>';
		echo $$attachment;

	}
}

/**
 * function to display content for the main banner
 * if its on desktop, it will display video(if video link is provided) or a sliding banner
 * otherwise if its on mobile, display the sliding banner
 */
function get_main_content() {

	$video = get_field('hero_video');
	if(!is_mobile()) {

		if($video) {

			$html  = '<video id="hero-video" loop>';
			$html .= '<source src="'. esc_url( get_stylesheet_directory_uri( "/" ) ) .'/inc/video/'.$video.'.mp4" type="video/mp4">';
			$html .= 'Oh noes! Your browser does not support the video tag.';
			$html .=  '</video>';

			echo $html;

		} else {

			$frontpage = new Page();
			$frontpage->display_banner();
			$frontpage->get_attachment();

		}

		
	} else {

		$frontpage = new Page();
		$frontpage->display_banner();

	}

}
?>