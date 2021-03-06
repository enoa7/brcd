<?php
/**
 * brcdfilm functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brcdfilm
 */

include 'inc/module/Page.class.php';

if ( ! function_exists( 'brcd_film_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brcd_film_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on brcdfilm, use a find and replace
	 * to change 'brcd-film' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'brcd-film', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'brcd-film' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'brcd_film_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'brcd_film_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brcd_film_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'brcd_film_content_width', 640 );
}
add_action( 'after_setup_theme', 'brcd_film_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function brcd_film_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'brcd-film' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'brcd-film' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/* add 'more info' widget */
	register_sidebar( array(
		'name'          => esc_html__( 'Footer - More Info', 'brcd-film' ),
		'id'            => 'footer-moreinfo',
		'description'   => esc_html__( 'Add widgets here.', 'brcd-film' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer - Sitemap', 'brcd-film' ),
		'id'            => 'footer-sitemap',
		'description'   => esc_html__( 'Add widgets here.', 'brcd-film' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer - Social Media', 'brcd-film' ),
		'id'            => 'footer-socialmedia',
		'description'   => esc_html__( 'Add widgets here.', 'brcd-film' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

}
add_action( 'widgets_init', 'brcd_film_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brcd_film_scripts() {
	wp_enqueue_style( 'brcd-film-style', get_stylesheet_uri() );

	wp_enqueue_script( 'brcd-film-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'brcd-film-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'brcd_film_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/* ==================================================================
 * Additional Image Sizes
 * ================================================================== */

add_image_size( 'mainBanner_lg', 1920, 600, true);
add_image_size( 'mainBanner_md', 992, 400, true);
add_image_size( 'mainBanner_xs', 768, 600, hard);
add_image_size( 'video_thumb', 500, 250, hard);
add_image_size( 'gallery_thumb', 300, 200, true);
add_image_size( 'logo', 200, 200, hard);

/* ==================================================================
 * Display child pages list
 * ================================================================== */

function wpb_list_child_pages() { 

global $post; 
if ( is_page() && $post->post_parent )
  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
if ( $childpages ) {
  $string = '<ul class="content-list list-parent __nodots __nopaddingleft __normarginleft">' . $childpages . '</ul>';
}
return $string;
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');

/* ==================================================================
 * Add the_slug() function
 * ================================================================== */

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

/* ==================================================================
 * Custom Pagination
 * ================================================================== */

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo '<nav class="custom-pagination col-xs-12 text-center __spacepad">';
      //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

/* ==================================================================
 * Add Featured Image for Categories
 * ================================================================== */

// add categories to attachments  
function wptp_add_categories_to_attachments() {
      register_taxonomy_for_object_type( 'category', 'attachment' );  
}  
add_action( 'init' , 'wptp_add_categories_to_attachments' ); 

/* ==================================================================
 * Grab child pages of Rental products
 * ================================================================== */

function get_rental_product($key, $value, $compare = '=') {

	// WP_Query arguments
	$args = array (
		'post_parent' 	=> '17',
		'post_type' 	=> 'page',
		'order'			=>	'ASC',
		'meta_query'	=> array(
			array(
				'key'       =>  $key,
				'value'     =>  $value,
				'compare'   =>  $compare
			),
		),
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			get_template_part('template-parts/content', 'item-post');
		}
	} else {
		echo 'no posts found';

	}

	// Restore original Post Data
	wp_reset_postdata();
}


// get article content that is placed as a highlight on the front page
function get_highlight() {
	// WP_Query arguments
		$args = array (
			'post_status'            => array( 'publish' ),
			'category_name'          => 'article',
			'posts_per_page'         => '3',
			'order'                  => 'DESC',
			'meta_query'             => array(
				array(
					'key'       => 'highlight',
					'value'     => 'yes',
					'compare'   => '=',
					'type'      => 'CHAR',
				),
			),
		);


		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part('template-parts/frontpage', 'highlight');
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();
}

function get_mainbanner($mobile, $desktop) {
	if(has_post_thumbnail()) {
		(is_mobile()) ? the_post_thumbnail($mobile, array('class' => 'img-responsive fullwidth')) : the_post_thumbnail($desktop, array('class' => 'img-responsive fullwidth'));
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
			masterslider(1); //call master slider
		}

		
	} else {

		// $frontpage = new Page();
		// $frontpage->display_banner();
		masterslider(1); //call master slider
	}

}

?>