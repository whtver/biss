<?php

/*-----------------------------------------------------------------------------------*/
/*	Example of registering our WP Ajax Load More scripts
/*-----------------------------------------------------------------------------------*/

if( !function_exists( 'enqueue_scripts' ) ) {
    function enqueue_scripts() {
    	//Register our JS
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', true);		
		wp_register_script('ajax-load-more', get_template_directory_uri() . '/ajax-load-more/js/ajax-load-more.js', 'jquery', '1.0', true);
		// Enqueue CSS
		wp_enqueue_style( 'ajax-load-more-css', get_template_directory_uri() . '/ajax-load-more/css/ajax-load-more.css' );

        // Enqueue our scripts
    	wp_enqueue_script('jquery');
    	wp_enqueue_script('ajax-load-more');	    	
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_scripts');
}

/*-----------------------------------------------------------------------------------*/
/*	WP Ajax Load More Shortcode
/*-----------------------------------------------------------------------------------*/

function ajax_load_more( $atts, $content = null ) {	
	extract(shortcode_atts(array(
		'path' 				=> get_template_directory_uri().'/ajax-load-more',
		'post_type' 		=> 'post',
		'category' 			=> '',
		'taxonomy' 			=> '',
		'tag' 				=> '',
		'author' 			=> '',
		'post_not_in' 		=> '',
		'display_posts' 	=> '4',
		'scroll' 			=> 'true',
		'button_text' 		=> 'Older Posts' 
   ), $atts));	
   return '<section id="ajax-load-more"><ul class="listing" data-path="'.$path.'" data-post-type="'.$post_type.'" data-category="'.$category.'" data-taxonomy="'.$taxonomy.'" data-tag="'.$tag.'" data-author="'.$author.'" data-post-not-in="'.$post_not_in.'" data-display-posts="'.$display_posts.'" data-scroll="'.$scroll.'" data-button-text="'.$button_text.'"></ul></section>';  
}
add_shortcode('ajax_load_more', 'ajax_load_more');

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

if ( ! function_exists( 'biss_setup' ) ) :
function biss_setup() {

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'biss' ),
		'secondary' => __( 'Footer', 'biss' ),
	) );

	add_theme_support( 'post-thumbnails' ); 
}
endif;
add_action( 'after_setup_theme', 'biss_setup' );

function retrieve_logo() {
	$return_value = array();

	$return_value['logo_non_mobile'] = get_field('website_logo_non-mobile', '43');
	$return_value['logo_mobile'] = get_field('website_logo_mobile', '43');
	$return_value['control'] = get_field('different_logo_for_mobile','43');

	return $return_value;
}

function create_post_type() {
	register_post_type( 'biss_logo',
		array(
			'labels' => array(
				'name' => __( 'Biss Logo' ),
				'singular_name' => __( 'Biss Logo' ),
			),
		'capability_type' => 'post',
  		'capabilities' => array(
    		'create_posts' => false, // Removes support for the "Add New" function
    		'delete_published_posts' => false
  			),
  		'map_meta_cap' => true, // Set to false, if users are not allowed to edit/delete existing posts
		'public' => true,
		'has_archive' => true,
		)
	);

	register_post_type( 'biss_footer', array(
	    'labels' => array(
	            'name' => 'Footer',
	            'singular_name' => 'Footer',
	    ),
	    'public' => true,
	    'show_ui' => true,
	    'show_in_menu' => 'themes.php',
	    'capabilities' => array(
    		'create_posts' => false, // Removes support for the "Add New" function
    		'delete_published_posts' => false
  			),
	    'map_meta_cap' => true, // Set to false, if users are not allowed to edit/delete existing posts
    	) 
	);
}
add_action( 'init', 'create_post_type' );

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function biss_scripts() {

	wp_enqueue_style('biss-bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.1.0');
	wp_enqueue_style('biss-bootstrap-theme-min-css', get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css', array(), '3.1.0');
	wp_enqueue_style( 'biss-style', get_stylesheet_uri(), array() );

	if(!is_page_template('page-templates/contact.php')){
		wp_enqueue_script( 'biss-jquery-script', get_template_directory_uri() . '/assets/js/jquery.js', array(), true );
	}
	
	wp_enqueue_script( 'biss-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true );
	wp_enqueue_script( 'biss-jquery-slide-script', get_template_directory_uri() . '/assets/js/jquery.slides.min.js', array(), true );
	wp_enqueue_script( 'biss-opacityrollover-script', get_template_directory_uri() . '/assets/js/jquery.opacityrollover.js', array(), true );
	wp_enqueue_script( 'biss-easyResponsiveTabs-script', get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array(), true );
	wp_enqueue_script( 'biss-galleriffic-script', get_template_directory_uri() . '/assets/js/jquery.galleriffic.js', array(), true );
	wp_enqueue_script( 'biss-app-script', get_template_directory_uri() . '/assets/js/app.js', array(), true );
	
}
add_action( 'wp_enqueue_scripts', 'biss_scripts' );

?>