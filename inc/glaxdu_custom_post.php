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
	register_post_type('scholarship',
		array(
			'labels' => array(
				'name' =>'Scholarship',
				'menu_name' =>'Scholarship',
				'add_new' =>'Add new Scholarship',
				'add_new_item' =>'Add new Scholarship',
				'edit_item' =>'Enter your Scholarship Title',
				'all_items' =>'All Scholarship'
			),
			'public' =>true,
			'supports' => array('title','editor','thumbnail'),
			'menu_icon'	=>'dashicons-images-alt'
		)
	);
	register_post_type('ourcourses',
		array(
			'labels' => array(
				'name' =>'Our Courses',
				'menu_name' =>'Our Courses',
				'add_new' =>'Add new Our Courses',
				'add_new_item' =>'Add new Our Courses',
				'edit_item' =>'Enter your Our Courses Title',
				'all_items' =>'All Our Courses'
			),
			'public' =>true,
			'supports' => array('title','editor','thumbnail'),
			'menu_icon'	=>'dashicons-images-alt'
		)
	);
	register_post_type('teacher',
		array(
			'labels' => array(
				'name' =>'Teacher',
				'menu_name' =>'Teacher',
				'add_new' =>'Add new Teacher',
				'add_new_item' =>'Add new Teacher',
				'edit_item' =>'Enter your Teacher Title',
				'all_items' =>'All Teacher'
			),
			'public' =>true,
			'supports' => array('title','thumbnail'),
			'menu_icon'	=>'dashicons-images-alt'
		)
	);
	register_post_type('ourevent',
		array(
			'labels' => array(
				'name' =>'Our Event',
				'menu_name' =>'Our Event',
				'add_new' =>'Add new Our Event',
				'add_new_item' =>'Add new Our Event',
				'edit_item' =>'Enter Our Event Title',
				'all_items' =>'All Our Event'
			),
			'public' =>true,
			'supports' => array('title','editor','thumbnail'),
			'menu_icon'	=>'dashicons-images-alt'
		)
	);
}
add_action('init','Glaxdu_Custom_Post');