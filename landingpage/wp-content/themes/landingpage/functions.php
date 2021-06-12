<?php
/**
 * Intuation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Intuation
 */


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function intuation_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_s' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'intuation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function intuation_scripts() {
	
	wp_enqueue_script('jquery-js', get_theme_file_uri('/js/jquery-1.12.4.min.js'), NULL, '1.0', true);
	wp_enqueue_script('metis-menu-js', get_theme_file_uri('js/metisMenu.min.js'), NULL, '1.0', true);
	wp_enqueue_script('main-intuation-js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
	//Bootstrap 5 beta
	wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	//Animation library
	wp_enqueue_script('animation-js', '//cdn.jsdelivr.net/npm/lax.js');	
	//Date and time picker
	wp_enqueue_script('datepicker-js', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js');	
	wp_enqueue_script('timepicker-js', '//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js');	
	
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    
  wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
  wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'intuation-style', get_stylesheet_uri(), array(), 1.0 );

  wp_enqueue_style('intuation-main', get_theme_file_uri('/css/main.css'), array(), 1.0);
  wp_enqueue_style('metis-menu', get_theme_file_uri('/css/metisMenu.css'), array(), 1.0);

  wp_enqueue_style('animation-lib', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

  wp_enqueue_style('bootstrap-datepicker', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css');
  wp_enqueue_style('jquery-timepicker', '//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css');
  
	wp_localize_script('main-intuation-js', 'IntuationData', array(
		'root_url' => get_site_url(),
		'nonce' => wp_create_nonce('wp_rest')
	));
}
add_action( 'wp_enqueue_scripts', 'intuation_scripts' );


function intuation_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  //add_image_size('professorLandscape', 400, 260, true);
  //add_image_size('professorPortrait', 480, 650, true);
  //add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'intuation_features');

