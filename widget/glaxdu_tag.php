<?php

// Creating the widget
class glaxdu_tag_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'glaxdu_tag_widget', 
 
// Widget name will appear in UI
__('Glaxdu Tag', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Glaxdu Tag Widget', 'wpb_widget_domain' ), )
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
<div class="sidebar-tag">
	<ul>
		<?php $tag = get_tags();
			foreach($tag as $tags){
		?>
	    <li><a href="<?php echo get_tag_link($tags->term_id);?>"><?php echo $tags->name;?></a></li>
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
$title = __( 'Tag', 'wpb_widget_domain' );
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
function Glaxdue_Tag() {
    register_widget( 'glaxdu_tag_widget' );
}
add_action( 'widgets_init', 'Glaxdue_Tag' );