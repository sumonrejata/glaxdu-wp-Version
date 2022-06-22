<?php

function RST_Glaxdu_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slider',1400,1000);
	add_image_size('our_courses',292,275);
	add_image_size('teacher_img','206','260');
	add_image_size('ourevent',372,235);
	add_image_size('our_post',260,202, true);
	add_image_size('recent_po',95,97);


	register_nav_menus(array(
		'main_menu'		=> __('Main Menu','rst_startup'),
		'footer_1'		=> __('Footer 1','rst_startup'),
		'footer_2'		=> __('Footer 2','rst_startup'),

	));

} 
add_action('after_setup_theme','RST_Glaxdu_theme_setup');





function Glaxdu_Enque_Script(){
	wp_enqueue_style( 'theme_css_1', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_css_2', get_template_directory_uri() . '/assets/css/icons.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_css_3', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_css_4', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'theme_css_5', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.11.7.min.js', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'theme_style', get_stylesheet_uri() );


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

// Custom Widget Register
if( file_exists(dirname(__FILE__)) . '/inc/custom_widget_register.php' ){
	require_once( dirname(__FILE__) . '/inc/custom_widget_register.php' );
}

// Create Custom Widget
if( file_exists(dirname(__FILE__)) . '/inc/glaxdu_custom_widget.php' ){
	require_once( dirname(__FILE__) . '/inc/glaxdu_custom_widget.php' );
}

// Load all custom widget file
if( file_exists(dirname(__FILE__)) . '/widget/recent_cource_widget.php' ){
	require_once( dirname(__FILE__) . '/widget/recent_cource_widget.php' );
}

// Load all Tag widget file
if( file_exists(dirname(__FILE__)) . '/widget/glaxdu_tag.php' ){
	require_once( dirname(__FILE__) . '/widget/glaxdu_tag.php' );
}

// Custom comment walker.
require get_template_directory() . '/inc/class-twentytwenty-walker-comment.php';




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
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Settings',
		'menu_title'	=> 'About Page ',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog Settings',
		'menu_title'	=> 'Blog Page ',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Settings',
		'menu_title'	=> 'Contact Page ',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Single Details Settings',
		'menu_title'	=> 'Single Details Page ',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}









/*
  A custom ACF widget.
*/
class ACF_Custom_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'acf_custom_widget', // Base ID
            __('ACF Custom Widget', 'text_domain'), // Name
            array( 'description' => __( 'A custom ACF widget', 'text_domain' ), 'classname' => 'acf-custom-widget' ) // Args
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( !empty($instance['title']) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        echo get_field('title', 'widget_' . $args['widget_id']);
        // Place your ACF code here


        if (get_field('upload_image', 'widget_' . $widget_id)) {
    $attachment_id = get_field('upload_image', 'widget_' . $widget_id);
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size );						
    $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
        echo '<img alt="'.$alt.'" src="' . $image[0] . '" />';			   
}

        
    echo $args['after_widget'];
    }
    public function form( $instance ) {
        if ( isset($instance['title']) ) {
            $title = $instance['title']; 
        }
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
} 
add_action( 'widgets_init', function(){
  register_widget( 'ACF_Custom_Widget' );
});




function cfw_add_user_social_links( $user_contact ) {

	/* Add user contact methods */
	$user_contact['facebook']  = __('Facebook Link', 'company');
	$user_contact['instagram'] = __('Instagram Link', 'company');
	$user_contact['twitter']   = __('Twitter Link', 'company');
	$user_contact['linkedin']  = __('LinkedIn Link', 'company');
	$user_contact['google']     = __('Google Plus', 'company');
	// $user_contact['github']    = __('Github Link', 'company');
	// $user_contact['dribbble']  = __('Dribbble Link', 'company');
	// $user_contact['behance']   = __('Behance Link', 'company');
	// $user_contact['skype']     = __('Skype Link', 'company');
	

	return $user_contact;
}
add_filter('user_contactmethods', 'cfw_add_user_social_links');



function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );


function wpsites_customize_comment_form_text_area($arg) {
    $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Your Feedback Is Appreciated', 'noun' ) . '</label><textarea id="comment" name="comment" placeholder="Message" aria-required="true"></textarea></p>';
    return $arg;
}

add_filter('comment_form_defaults', 'wpsites_customize_comment_form_text_area');



//change text to leave a reply on comment form
function Leave_Reply_Title_Customize ($arg) {
$arg['title_reply'] = __('Leave A Comment');
return $arg;
}
add_filter('comment_form_defaults','Leave_Reply_Title_Customize');


 function Startup_author_email_url_form_fields($fields) {
    $replace_author = __('Name', 'yourdomain');
    $replace_email = __('Email', 'yourdomain');
    $replace_url = __('Your Website', 'yourdomain');
    
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'yourdomain' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" placeholder="'.$replace_author.'" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></p>';
                    
    $fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email', 'yourdomain' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" type="text" placeholder="'.$replace_email.'" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>';
    
    $fields['url'] = '<p class="comment-form-url"><label for="url">' . __( 'Website', 'yourdomain' ) . '</label>' .
    '<input id="url" name="url" type="text" placeholder="'.$replace_url.'" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p>';

   
    return $fields;
}
add_filter('comment_form_default_fields','Startup_author_email_url_form_fields');



// This code for comment form website fields remove
function unset_url_field($fields){
    if(isset($fields['url']))
       unset($fields['url']);
       return $fields;
}
add_filter('comment_form_default_fields', 'unset_url_field');


function wcs_change_submit_button_text( $defaults ) {
    $defaults['label_submit'] = 'POST YOUR COMMENT';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'wcs_change_submit_button_text' );






function my_acf_google_map_api( $api ){
    $api['key'] = 'xxx';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_init() {
    acf_update_setting('google_api_key', 'xxx');
}
add_action('acf/init', 'my_acf_init');





