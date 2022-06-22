<?php
// Creating the widget
class recent_cource_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'recent_cource_widget', 
 
// Widget name will appear in UI
__('Glaxdu Recent Cource', 'wpb_widget_domain'), 
 
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
  <?php
  $basicpost = null;
  $basicpost = new WP_query(array(
    'post_type' => 'ourcourses',
    'posts_per_page' => 4,
  ));
  if( $basicpost->have_posts() ){
    while ($basicpost->have_posts() ){
        $basicpost->the_post();
         $categories = get_the_category();
        ?>
        <pre><?php //print_r($categories); ?></pre>
        <div class="sidebar-recent-course">

            <div class="sin-sidebar-recent-course">
                <div class="sidebar-recent-course-img">
                    <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
                </div>
                <div class="sidebar-recent-course-content">
                    <h4><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),'2');?></a></h4>
                    <ul>
                        <li>Credits : 125</li>
                        <li class="duration-color">Duration : 4yrs</li>
                    </ul>
                    <p><?php echo wp_trim_words(get_the_content(),'6');?></p>
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
function Recent_Cource_Glaxdu() {
    register_widget( 'recent_cource_widget' );
}
add_action( 'widgets_init', 'Recent_Cource_Glaxdu' );