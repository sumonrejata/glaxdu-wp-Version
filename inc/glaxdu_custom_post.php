<?php

function Glaxdu_Custom_Post(){
	register_post_type('slider',
		array(
			'labels' => array(
				'name' =>'Slider',
				'menu_name' =>'Slider',
				'add_new' =>'Add new slider',
				'add_new_item' =>'Add new slider',
				'edit_item' =>'Enter your Slider Title',
				'all_items' =>'All Slider'
			),
			'public' =>true,
			'supports' => array('title','editor','thumbnail'),
			'menu_icon'	=>'dashicons-images-alt'
		)
	);
}
add_action('init','Glaxdu_Custom_Post');