<?php

function Glaxdue_Custom_Widget() {
    register_sidebar( array(
        'name'          => __( 'About Us', 'glaxdu' ),
        'id'            => 'about_us',
        'description'   => __( 'This Widget For About Us.', 'glaxdu' ),
        'before_widget' => '<div class="footer-widget mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_Custom_Widget' );


function Glaxdue_QUICK_LINK_Widget() {
    register_sidebar( array(
        'name'          => __( 'QUICK LINK', 'glaxdu' ),
        'id'            => 'quick_link',
        'description'   => __( 'This Widget For QUICK LINK.', 'glaxdu' ),
        'before_widget' => '<div class="footer-widget mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_QUICK_LINK_Widget' );

function Glaxdue_COURSES_Widget() {
    register_sidebar( array(
        'name'          => __( 'Footer Courses Widget', 'glaxdu' ),
        'id'            => 'footer_courses',
        'description'   => __( 'This Widget For Footer Courses Widget', 'glaxdu' ),
        'before_widget' => '<div class="footer-widget mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_COURSES_Widget' );

function Glaxdue_GALLERY_Widget() {
    register_sidebar( array(
        'name'          => __( 'Footer Gallery Widget', 'glaxdu' ),
        'id'            => 'footer_gallery',
        'description'   => __( 'This Widget For Footer Gallery Widget', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_GALLERY_Widget' );

function Glaxdue_Newslater_Widget() {
    register_sidebar( array(
        'name'          => __( 'Footer Newslater Widget', 'glaxdu' ),
        'id'            => 'newslater',
        'description'   => __( 'This Widget For Footer Newslater Widget', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_Newslater_Widget' );


function Glaxdue_Search_Sidebar() {
    register_sidebar( array(
        'name'          => __( 'Glaxdu Search Sidebar', 'glaxdu' ),
        'id'            => 'glaxdu_search',
        'description'   => __( 'This Widget For Glaxdu Search Sidebar', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title mb-15"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_Search_Sidebar' );

function Glaxdue_About_Sidebar() {
    register_sidebar( array(
        'name'          => __( 'About Sidebar', 'glaxdu' ),
        'id'            => 'about_sidebar',
        'description'   => __( 'This Widget For Glaxdu About Sidebar', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title mb-15"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_About_Sidebar' );


function Glaxdue_Gallery() {
    register_sidebar( array(
        'name'          => __( 'Gallery Widget', 'glaxdu' ),
        'id'            => 'gallery_widget_test',
        'description'   => __( 'This Widget For Glaxdu About Sidebar', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title mb-15"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_Gallery' );

function Glaxdue_Recent_Post() {
    register_sidebar( array(
        'name'          => __( 'Glaxdu Recent Post', 'glaxdu' ),
        'id'            => 'glaxdu_recent_post',
        'description'   => __( 'This Widget For Glaxdu Recent Post', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title mb-15"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_Recent_Post' );



function Glaxdue_Category_Widget() {
    register_sidebar( array(
        'name'          => __( 'Glaxdu Category', 'glaxdu' ),
        'id'            => 'glaxdu_category',
        'description'   => __( 'This Widget For Glaxdu Recent Post', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title mb-15"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_Category_Widget' );

function Glaxdue_Recent_Cource_Widget() {
    register_sidebar( array(
        'name'          => __( 'Glaxdu Recent Cource', 'glaxdu' ),
        'id'            => 'glaxdu_recent_cource',
        'description'   => __( 'This Widget For Glaxdu Recent Post', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title mb-15"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdue_Recent_Cource_Widget' );

function Glaxdu_Tag() {
    register_sidebar( array(
        'name'          => __( 'Glaxdu Tag', 'glaxdu' ),
        'id'            => 'glaxdu_tag',
        'description'   => __( 'This Widget For Glaxdu Tag', 'glaxdu' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title mb-15"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}
add_action( 'widgets_init', 'Glaxdu_Tag' );











