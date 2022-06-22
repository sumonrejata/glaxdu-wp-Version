<?php

// Creating the widget
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('Glaxdu About Us', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$description = $instance['description'];
$location = $instance['location'];
$email_add = $instance['email_add'];
$email_link = $instance['email_link'];
$phone_num = $instance['phone_num'];
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output

?>
	 <div class="footer-about">
        <p><?php echo $description; ?></p>
        <div class="f-contact-info">
            <div class="single-f-contact-info">
                <i class="fa fa-home"></i>
                <span><?php echo $location; ?></span>
            </div>
            <div class="single-f-contact-info">
                <i class="fa fa-envelope-o"></i>
                <span><a href="<?php echo $email_link; ?>"><?php echo $email_add; ?></a></span>
            </div>
            <div class="single-f-contact-info">
                <i class="fa fa-phone"></i>
                <span> +88<?php echo $phone_num; ?></span>
            </div>
        </div>
    </div>

<?php 


echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
$description = $instance['description'];
$location = $instance['location'];
$email_add = $instance['email_add'];
$email_link = $instance['email_link'];
$phone_num = $instance['phone_num'];
}
else {
$title = __( 'About Us', 'wpb_widget_domain' );
}
// Widget admin form
?>

<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>

<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>"><?php echo $description; ?></textarea>
</p>

<p>
<label for="<?php echo $this->get_field_id( 'location' ); ?>"><?php _e( 'Location:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'location' ); ?>" name="<?php echo $this->get_field_name( 'location' ); ?>" type="text" value="<?php echo esc_attr( $location ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'email_add' ); ?>"><?php _e( 'Email:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'email_add' ); ?>" name="<?php echo $this->get_field_name( 'email_add' ); ?>" type="text" value="<?php echo esc_attr( $email_add ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'email_link' ); ?>"><?php _e( 'Email Url :' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'email_link' ); ?>" name="<?php echo $this->get_field_name( 'email_link' ); ?>" type="text" value="<?php echo esc_attr( $email_link ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'phone_num' ); ?>"><?php _e( 'Phone :' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'phone_num' ); ?>" name="<?php echo $this->get_field_name( 'phone_num' ); ?>" type="text" value="<?php echo esc_attr( $phone_num ); ?>" />
</p>

<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 $instance['description'] = $new_instance['description'];
 $instance['location'] = $new_instance['location'];
 $instance['email_add'] = $new_instance['email_add'];
 $instance['email_link'] = $new_instance['email_link'];
 $instance['phone_num'] = $new_instance['phone_num'];
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );






// Creating the widget
class Footer_Gallery extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'glaxdu_gallery', 
 
// Widget name will appear in UI
__('Glaxdu Gallery Widget', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Glaxdu Gallery', 'wpb_widget_domain' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
$widget_id = "widget_" . $args["widget_id"];
$add_logo = get_field("gallery_text", $widget_id);
$add_image = get_field("footer_gallery_widget", $widget_id);
$add_image_link = get_field("footer_gallery_link", $widget_id);
?>
 <div class="footer-gallery">
    <ul>
    <?php
        foreach($add_image as $add_images){
    ?>
        <li><a href="<?php echo $add_image_link; ?>"><img src="<?php echo $add_images['url'];?>" alt=""></a></li>
        <?php } ?>
    </ul>
</div>

<?php 

echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function Footer_Gallery_widget() {
    register_widget( 'Footer_Gallery' );
}
add_action( 'widgets_init', 'Footer_Gallery_widget' );







// Creating the widget  Footer Newslater Widget
class Footer_Newslater_Widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'newslater_widget', 
 
// Widget name will appear in UI
__('Glaxdu Newslater', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$news_descrip = $instance['news_descrip'];
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
?>
     <div class="subscribe-style">
        <p><?php echo $news_descrip; ?></p>
        <div id="mc_embed_signup" class="subscribe-form">
        <?php echo do_shortcode('[contact-form-7 id="271" title="Newslater Contact"]'); ?>
           
        </div>
    </div>
<?php

echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
$news_descrip = $instance[ 'news_descrip' ];
}
else {
$title = __( 'News Latter', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'news_descrip' ); ?>"><?php _e( 'Title:' ); ?></label>
<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('news_descrip'); ?>" name="<?php echo $this->get_field_name('news_descrip'); ?>"><?php echo $news_descrip; ?></textarea>
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['news_descrip'] = $new_instance['news_descrip'];
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function Newslater_Widget() {
    register_widget( 'Footer_Newslater_Widget' );
}
add_action( 'widgets_init', 'Newslater_Widget' );







// Start Search Widget

// Creating the widget
class glaxdu_search_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'glaxdu_search_widget', 
 
// Widget name will appear in UI
__('Glaxdu Search Widget', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
?> 
    <form>
        <input type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Search">
        <button><i class="fa fa-search"></i></button>
    </form>
<?php
echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Search', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function Glaxdu_Theme_Search_Widget() {
    register_widget( 'glaxdu_search_widget' );
}
add_action( 'widgets_init', 'Glaxdu_Theme_Search_Widget' );




// Start About Us Widget

// Creating the widget
class Glaxdu_About extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'Glaxdu_About', 
 
// Widget name will appear in UI
__('Glaxdu About Sidebar', 'glaxdu'), 
 
// Widget description
array( 'description' => __( 'This widget for About Sidebar', 'glaxdu' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$about_desc = $instance['about_desc'];
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
// $about_image = get_field('about_side_img', 'widget_' . $widget_id);
$widget_id = "widget_" . $args["widget_id"];
$about_ima = get_field("about_side_img", $widget_id);
$about_side_img_url = get_field("about_side_img_url", $widget_id);
$blog_about_social = get_field("blog_about_social", $widget_id);
?>
    <p><?php echo $about_desc; ?></p>
    <a href="<?php echo $about_side_img_url; ?>"><img src="<?php echo $about_ima['url']; ?>" alt=""></a>
    <div class="sidebar-social">
        <ul>
            <?php
             foreach($blog_about_social as $blog_about_soci){
            ?>
            <li><a class="facebook" style="color:<?php echo $blog_about_soci['about_sidebar_icon_color'];?>;" href="<?php echo $blog_about_soci['about_sidebar_url'];?>"><i class="<?php echo $blog_about_soci['about_sidebar_icon'];?>"></i></a></li>
         <?php } ?>
        </ul>
    </div>

<?php

echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
$about_desc  = $instance[ 'about_desc' ];
}
else {
$title = __( 'About', 'glaxdu' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('about_desc'); ?>" name="<?php echo $this->get_field_name('about_desc'); ?>"><?php echo $about_desc; ?></textarea>
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['about_desc'] = $new_instance['about_desc'];
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function Glaxdu_About_Widget() {
    register_widget( 'Glaxdu_About' );
}
add_action( 'widgets_init', 'Glaxdu_About_Widget' );






// Image Widget Test

// Creating the widget
class image_widget_test extends WP_Widget {
 
function __construct() {
    add_action('admin_enqueue_scripts', array($this, 'scripts'));
parent::__construct(
 
// Base ID of your widget
'image_widget_test', 
 
// Widget name will appear in UI
__('Image Widget Test', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
);
}


public function scripts()
{
   wp_enqueue_script( 'media-upload' );
   wp_enqueue_media();
   wp_enqueue_script('our_admin', get_template_directory_uri() . '/assets/js/our_admin.js', array('jquery'));
}

 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$image = ! empty( $instance['image'] ) ? $instance['image'] : '';
$about_des = $instance['about_des'];
$fb_icon = ! empty( $instance['fb_icon'] ) ? $instance['fb_icon'] : '';
$fb_icon_link = ! empty( $instance['fb_icon_link'] ) ? $instance['fb_icon_link'] : '';
$fb_icon_color = ! empty( $instance['fb_icon_color'] ) ? $instance['fb_icon_color'] : '';
$youtube_icon = ! empty( $instance['youtube_icon'] ) ? $instance['youtube_icon'] : '';
$youtube_icon_color = ! empty( $instance['youtube_icon_color'] ) ? $instance['youtube_icon_color'] : '';
$youtube_icon_link = ! empty( $instance['youtube_icon_link'] ) ? $instance['youtube_icon_link'] : '';
$twitter_icon = ! empty( $instance['twitter_icon'] ) ? $instance['twitter_icon'] : '';
$twitter_link = ! empty( $instance['twitter_link'] ) ? $instance['twitter_link'] : '';
$twitter_icon_colr = ! empty( $instance['twitter_icon_colr'] ) ? $instance['twitter_icon_colr'] : '';
$google_icon = ! empty( $instance['google_icon'] ) ? $instance['google_icon'] : '';
$google_link = ! empty( $instance['google_link'] ) ? $instance['google_link'] : '';
 
   ob_start();
   echo $args['before_widget'];
   if ( ! empty( $instance['title'] ) ) {
      echo $args['before_title'] . $title . $args['after_title'];
   }
   ?>
    
    <p><?php echo $about_des;  ?></p>
   <?php if($image): ?>
      <a href=""><img src="<?php echo esc_url($image); ?>" alt=""></a>
   <?php endif; ?>
   <div class="sidebar-social">
        <ul>
            <li><a class="facebook" style="color:<?php echo $fb_icon_color; ?>;" href="<?php echo $fb_icon_link; ?>"><i class="fa fa-<?php echo $fb_icon; ?>"></i></a></li>
            <li><a class="youtube" style="color:<?php echo $youtube_icon_color; ?>;" href="<?php echo $youtube_icon_link; ?>"><i class="fa fa-<?php echo $youtube_icon; ?>"></i></a></li>
            <li><a class="twitter" style="color:<?php echo $twitter_icon_colr; ?>;" href="<?php echo $twitter_link; ?>"><i class="fa fa-<?php echo $twitter_icon; ?>"></i></a></li>
            <li><a class="google" href="<?php echo $google_link; ?>"><i class="fa fa-<?php echo $google_icon; ?>"></i></a></li>
        </ul>
    </div>
 
   <?php
   echo $args['after_widget'];
   ob_end_flush();
}


public function form( $instance ) {
   $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
   $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
   $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
   $about_des = $instance['about_des'];
   $fb_icon = ! empty( $instance['fb_icon'] ) ? $instance['fb_icon'] : '';
   $fb_icon_link = ! empty( $instance['fb_icon_link'] ) ? $instance['fb_icon_link'] : '';
   $fb_icon_color = ! empty( $instance['fb_icon_color'] ) ? $instance['fb_icon_color'] : '';
   $youtube_icon = ! empty( $instance['youtube_icon'] ) ? $instance['youtube_icon'] : '';
   $youtube_icon_color = ! empty( $instance['youtube_icon_color'] ) ? $instance['youtube_icon_color'] : '';
   $youtube_icon_link = ! empty( $instance['youtube_icon_link'] ) ? $instance['youtube_icon_link'] : '';
   $twitter_icon = ! empty( $instance['twitter_icon'] ) ? $instance['twitter_icon'] : '';
   $twitter_link = ! empty( $instance['twitter_link'] ) ? $instance['twitter_link'] : '';
   $twitter_icon_colr = ! empty( $instance['twitter_icon_colr'] ) ? $instance['twitter_icon_colr'] : '';
   $google_icon = ! empty( $instance['google_icon'] ) ? $instance['google_icon'] : '';
   $google_link = ! empty( $instance['google_link'] ) ? $instance['google_link'] : '';

   ?>
   <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
   </p>

<p>
<label for="<?php echo $this->get_field_id( 'about_des' ); ?>"><?php _e( 'Description:' ); ?></label>
<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('about_des'); ?>" name="<?php echo $this->get_field_name('about_des'); ?>"><?php echo $about_des; ?></textarea>
</p>

   <p>
      <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_url( $image ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'fb_icon' ); ?>"><?php _e( 'Facebook Icon:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'fb_icon' ); ?>" name="<?php echo $this->get_field_name( 'fb_icon' ); ?>" type="text" value="<?php echo esc_attr( $fb_icon ); ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id( 'fb_icon_link' ); ?>"><?php _e( 'Facebook Icon Link:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'fb_icon_link' ); ?>" name="<?php echo $this->get_field_name( 'fb_icon_link' ); ?>" type="text" value="<?php echo esc_attr( $fb_icon_link ); ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id( 'fb_icon_color' ); ?>"><?php _e( 'Facebook Icon Color:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'fb_icon_color' ); ?>" name="<?php echo $this->get_field_name( 'fb_icon_color' ); ?>" type="text" value="<?php echo esc_attr( $fb_icon_color ); ?>">
   </p>

   <p>
    <label>Youtube Icon:</label>
      <select id="<?php echo $this->get_field_id('youtube_icon'); ?>" name="<?php echo $this->get_field_name('youtube_icon'); ?>" class="widefat" style="width:100%;"> 
        <option <?php selected( $instance['youtube_icon'], 'youtube-play'); ?> value="youtube-play" selected="selected">Youtube-play</option>
        <option <?php selected( $instance['youtube_icon'], 'youtube'); ?> value="youtube" selected="selected">Youtube</option>
        <option <?php selected( $instance['youtube_icon'], 'youtube-square'); ?> value="youtube-square" selected="selected">Youtube-square</option>
    </select>
   </p>
    
    <p>
    <label>Youtube Icon:</label>
      <select id="<?php echo $this->get_field_id('youtube_icon_color'); ?>" name="<?php echo $this->get_field_name('youtube_icon_color'); ?>" class="widefat" style="width:100%;"> 
        <option <?php selected( $instance['youtube_icon_color'], 'Icon Color 1'); ?> value="#E32C2C" selected="selected">Icon Color 1</option>
        <option <?php selected( $instance['youtube_icon_color'], 'Icon Color 2'); ?> value="#29CBA5" selected="selected">Icon Color 2</option>
        <option <?php selected( $instance['youtube_icon_color'], 'Icon Color 3'); ?> value="youtube-square" selected="selected">Icon Color 3</option>
    </select>
   </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'youtube_icon_link' ); ?>"><?php _e( 'Youtube Link:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'youtube_icon_link' ); ?>" name="<?php echo $this->get_field_name( 'youtube_icon_link' ); ?>" type="text" value="<?php echo esc_attr( $youtube_icon_link ); ?>">
   </p>


   <p>
    <label>Twitter Icon:</label>
      <select id="<?php echo $this->get_field_id('twitter_icon'); ?>" name="<?php echo $this->get_field_name('twitter_icon'); ?>" class="widefat" style="width:100%;"> 
        <option <?php selected( $instance['twitter_icon'], 'twitter-square'); ?> value="twitter-square" selected="selected">twitter-square</option>
        <option <?php selected( $instance['twitter_icon'], 'Twitch'); ?> value="twitch" selected="selected">Twitter</option>
        <option <?php selected( $instance['twitter_icon'], 'Twitter'); ?> value="twitter" selected="selected">Twitch</option>
    </select>
   </p>

   <p>
    <label>Twitter Icon Color :</label>
      <select id="<?php echo $this->get_field_id('twitter_icon_colr'); ?>" name="<?php echo $this->get_field_name('twitter_icon_colr'); ?>" class="widefat" style="width:100%;"> 
        <option <?php selected( $instance['twitter_icon_colr'], 'Icon Color 1'); ?> value="#38a1f3" selected="selected">Icon Color 1</option>
        <option <?php selected( $instance['twitter_icon_colr'], 'Icon Color 2'); ?> value="#0054a6" selected="selected">Icon Color 2</option>
        <option <?php selected( $instance['twitter_icon_colr'], 'Icon Color 3'); ?> value="#c4302b" selected="selected">Icon Color 3</option>
    </select>
   </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'twitter_link' ); ?>"><?php _e( 'Twitter Link :' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'twitter_link' ); ?>" name="<?php echo $this->get_field_name( 'twitter_link' ); ?>" type="text" value="<?php echo esc_attr( $twitter_link ); ?>">
   </p>


   <p>
    <label>Google Icon:</label>
      <select id="<?php echo $this->get_field_id('google_icon'); ?>" name="<?php echo $this->get_field_name('google_icon'); ?>" class="widefat" style="width:100%;"> 
        <option <?php selected( $instance['google_icon'], 'google-plus'); ?> value="google-plus" selected="selected">Google-plus</option>
        <option <?php selected( $instance['google_icon'], 'google'); ?> value="google" selected="selected">Google</option>
    </select>
   </p>

   <p>
      <label for="<?php echo $this->get_field_id( 'google_link' ); ?>"><?php _e( 'Google Link :' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'google_link' ); ?>" name="<?php echo $this->get_field_name( 'google_link' ); ?>" type="text" value="<?php echo esc_attr( $google_link ); ?>">
   </p>

   <?php
}



 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
   $instance = array();
   $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
   $instance['about_des'] = ( ! empty( $new_instance['about_des'] ) ) ? $new_instance['about_des'] : '';
   $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';
   $instance['fb_icon'] = ( ! empty( $new_instance['fb_icon'] ) ) ? $new_instance['fb_icon'] : '';
   $instance['fb_icon_link'] = ( ! empty( $new_instance['fb_icon_link'] ) ) ? $new_instance['fb_icon_link'] : '';
   $instance['fb_icon_color'] = ( ! empty( $new_instance['fb_icon_color'] ) ) ? $new_instance['fb_icon_color'] : '';
   $instance['youtube_icon'] = ( ! empty( $new_instance['youtube_icon'] ) ) ? $new_instance['youtube_icon'] : '';
   $instance['youtube_icon_color'] = ( ! empty( $new_instance['youtube_icon_color'] ) ) ? $new_instance['youtube_icon_color'] : '';
   $instance['youtube_icon_link'] = ( ! empty( $new_instance['youtube_icon_link'] ) ) ? $new_instance['youtube_icon_link'] : '';
   $instance['twitter_icon'] = ( ! empty( $new_instance['twitter_icon'] ) ) ? $new_instance['twitter_icon'] : '';
   $instance['twitter_link'] = ( ! empty( $new_instance['twitter_link'] ) ) ? $new_instance['twitter_link'] : '';
   $instance['twitter_icon_colr'] = ( ! empty( $new_instance['twitter_icon_colr'] ) ) ? $new_instance['twitter_icon_colr'] : '';
   $instance['google_icon'] = ( ! empty( $new_instance['google_icon'] ) ) ? $new_instance['google_icon'] : '';
   $instance['google_link'] = ( ! empty( $new_instance['google_link'] ) ) ? $new_instance['google_link'] : '';
 
   return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function Image_Gallery_Widget() {
    register_widget( 'image_widget_test' );
}
add_action( 'widgets_init', 'Image_Gallery_Widget' );





// Start Recent Post Widget

// Creating the widget
class Glaxdu_Recent_Post extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'glaxdu_recent_post', 
 
// Widget name will appear in UI
__('Glaxdu Recent Post', 'glaxdu'), 
 
// Widget description
array( 'description' => __( 'Glaxdu Recent Post Widget', 'glaxdu' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output

?>
      <?php
          $basicpost = null;
          $basicpost = new WP_query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          ));
          if( $basicpost->have_posts() ){
            while ($basicpost->have_posts() ){
                $basicpost->the_post();
                $categories = get_the_category();
                ?>

                 <div class="recent-post-wrap">
                    <div class="single-recent-post">
                        <div class="recent-post-img">
                            <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('recent_po');?>" alt=""></a>
                        </div>
                        <div class="recent-post-content">
                            <h5><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),'3'); ?></a></h5>
                            <span><?php echo $categories[0]->name; ?></span>
                            <p><?php echo wp_trim_words(get_the_content(),'4'); ?></p>
                        </div>
                    </div>
                    
                </div>

            <?php }
          }
          else{
            echo "No Post";
          }
          wp_reset_postdata();
          ?>
<?php


echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Recent Post', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function Glaxdu_Recent_Post_Widget () {
    register_widget( 'Glaxdu_Recent_Post' );
}
add_action( 'widgets_init', 'Glaxdu_Recent_Post_Widget' );






// Category widget start

class glaxdu_category_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'glaxdu_category_widget', 
 
// Widget name will appear in UI
__('Glaxdu Category Widget', 'glaxdu'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
?>
<div class="category-list">
    <ul>
  <?php 
        $categories = get_categories( array(
            'hide_empty'       => 0,
            'parent'  => 0
        ) );
        $limit=5;
        $counter=0;
        foreach ($categories as $cat) : 
        if($counter<$limit){
  ?>
<li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?><span><?php echo $cat->count; ?></span></a></li>
<?php $counter++;
                }
 endforeach; ?>

  </ul>
 </div>

 
<?php
echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Course Category', 'glaxdu' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function Glaxdi_Categorys_Widget() {
    register_widget( 'glaxdu_category_widget' );
}
add_action( 'widgets_init', 'Glaxdi_Categorys_Widget' );