<?php

function RST_Glaxdu_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slider',1400,1000);


	register_nav_menus(array(
		'main_menu'		=> __('Main Menu','rst_startup'),

	));

} 
add_action('after_setup_theme','RST_Glaxdu_theme_setup');





function Glaxdu_Enque_Script(){
	wp_enqueue_style( 'theme_css_1', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_css_2', get_template_directory_uri() . '/assets/css/icons.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_css_3', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_css_4', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'theme_css_5', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.11.7.min.js', array(), '1.0.0', 'all' );


	// Theme JS File
	 wp_enqueue_script( 'theme_js_1', get_template_directory_uri() . '/assets/js/vendor/jquery-v2.2.4.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'theme_js_2', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'theme_js_3', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'theme_js_4', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'theme_js_5', get_template_directory_uri() . '/assets/js/ajax-mail.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'theme_js_6', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts','Glaxdu_Enque_Script');


require_once get_template_directory() . '/inc/glaxdu-walker-nav-menu.php';

if( file_exists(dirname(__FILE__)) . '/inc/glaxdu_custom_post.php' ){
	require_once( dirname(__FILE__) . '/inc/glaxdu_custom_post.php' );
}


// All ACF code
function startup_acf_json( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';    
    
    // return
    return $path;    
}
add_filter('acf/settings/save_json', 'startup_acf_json');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}





















