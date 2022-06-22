<?php
/*
	Template Name:Home
*/
 get_header(); ?>
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <?php
          $slider = null;
          $slider = new WP_query(array(
            'post_type' => 'slider',
            'posts_per_page' => -1,
          ));
          if( $slider->have_posts() ){
            while ($slider->have_posts() ){
                $slider->the_post();
                $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                $slider_btn_text_1 = get_field('slider_btn_text_1');
                $slider_btn_url_1 = get_field('slider_btn_url_1');
                $slider_btn_text_2 = get_field('slider_btn_text_2');
                $slider_btn_url_2 = get_field('slider_btn_url_2');
                $slider_image = get_field('slider_image');
                ?>
                <div class="single-slider slider-height-1 bg-img" style="background-image:url('<?php echo $backgroundImg[0]; ?>');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                                <div class="slider-content slider-animated-1 pt-230">
                                    <h1 class="animated"><?php echo wp_trim_words(get_the_title(),'5'); ?></h1>
                                    <p class="animated"><?php echo wp_trim_words(get_the_content(),'40','....'); ?></p>
                                    <div class="slider-btn">
                                        <?php if($slider_btn_text_1) : ?>
                                        <a class="animated default-btn btn-green-color" href="<?php echo $slider_btn_url_1; ?>"><?php echo $slider_btn_text_1; ?>
                                        </a>
                                       <?php endif; ?>
                                       <?php if($slider_btn_text_2) : ?>
                                        <a class="animated default-btn btn-white-color" href="<?php echo $slider_btn_text_2; ?>"><?php echo $slider_btn_text_2; ?>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="<?php echo $slider_image['url']; ?>" alt="">
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

    </div>
</div>
<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
             <?php
              $scholarship = null;
              $scholarship = new WP_query(array(
                'post_type' => 'scholarship',
                'posts_per_page' => -1,
              ));
              if( $scholarship->have_posts() ){
                while ($scholarship->have_posts() ){
                    $scholarship->the_post();
                    $scho_bg_color = get_field('scholarship_baground_color');
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-choose-us <?php echo $scho_bg_color; ?>">
                            <div class="choose-img">
                                <img class="animated" src="<?php the_post_thumbnail_url();?>" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo wp_trim_words(get_the_title(),'2');?></h3>
                                <p><?php echo wp_trim_words(get_the_content(),'13','....');?></p>
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
        </div>
    </div>
</div>
<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <?php 
                    $about_us_sub_title_1 = get_field('about_us_sub_title_1','option');
                    $about_us_sub_title_2 = get_field('about_us_sub_title_2','option');
                    $about_us_title = get_field('about_us_title','option');
                    $about_us_desc = get_field('about_us_desc','option');
                    $about_image = get_field('about_image','option');
                    $about_video = get_field('about_video','option');
                    $about_video_image = get_field('about_video_image','option');
                    $about_button_text = get_field('about_button_text','option');
                    $about_btn_link = get_field('about_btn_link','option');
                 ?>
                <div class="about-content">
                    <?php if($about_us_sub_title_1) : ?>
                    <div class="section-title section-title-green mb-30">
                        <h2><?php echo $about_us_sub_title_1; ?> <span><?php echo $about_us_sub_title_2; ?></span></h2>
                        <p><?php echo $about_us_title; ?></p>
                    </div>
                    <?php endif; ?>
                    <p><?php echo $about_us_desc; ?></p>
                    <?php if($about_btn_link) : ?>
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="<?php echo $about_btn_link; ?>"><?php echo $about_button_text; ?></a>
                    </div>
                <?php endif; ?>
                </div>
            </div>
            <?php if($about_image['url']) : ?>
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="<?php echo $about_image['url'];?>" alt="">
                    <a class="video-btn video-popup" href="<?php echo $about_video; ?>">
                        <img class="animated" src="<?php echo $about_video_image['url'];?>" alt="">
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php 
$our_courses_bg = get_field('our_courses_bg','option');
$our_courses_title = get_field('our_courses_title','option');
$our_courses_sub_title_1 = get_field('our_courses_sub_title_1','option');
$our_courses_sub_title_2 = get_field('our_courses_sub_title_2','option');
?>
<div class="course-area bg-img pt-130 pb-10" style="background-image:url(<?php echo $our_courses_bg['url']; ?>);">
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span><?php echo $our_courses_sub_title_1; ?></span> <?php echo $our_courses_sub_title_2; ?></h2>
            <p><?php echo $our_courses_title; ?></p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
             <?php
              $courses = null;
              $courses = new WP_query(array(
                'post_type' => 'ourcourses',
                'posts_per_page' => -1,
              ));
              if( $courses->have_posts() ){
                while ($courses->have_posts() ){
                    $courses->the_post();
                    $admition_title = get_field('admition_title');
                    $cradit_number = get_field('cradit_number');
                    $cradit_icon = get_field('cradit_icon');
                    $duration_day = get_field('duration_day');
                    $courses_btn = get_field('courses_btn');
                    $courses_btn_link = get_field('courses_btn_link');
                    ?>
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.html"><img class="animated" src="<?php the_post_thumbnail_url('our_courses');?>" alt=""></a>
                            <?php if($admition_title) : ?>
                            <span><?php echo $admition_title; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="course-content">
                            <h4><a href="course-details.html"><?php echo wp_trim_words(get_the_title(),'3');?></a></h4>
                            <p><?php echo wp_trim_words(get_the_content(),'15','....');?></p>
                        </div>
                        <div class="course-position-content">
                            <div class="credit-duration-wrap">
                                
                                <?php if($cradit_number) : ?>
                                <div class="sin-credit-duration">
                                    <i class="fa fa-<?php echo $cradit_icon;?>"></i>
                                    <span>Credits : <?php echo $cradit_number;?></span>
                                </div>
                            <?php endif; ?>
                                <div class="sin-credit-duration">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Duration : <?php echo $duration_day;?></span>
                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn" href="<?php echo $courses_btn_link;?>"><?php echo $courses_btn;?></a>
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
        </div>
    </div>
</div>





<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <?php
             $achivement_title_1 = get_field('achivement_title_1','option');
             $achivement_title_2 = get_field('achivement_title_2','option');
             $achivement_title_2_color = get_field('achivement_title_2_color','option');
             $achivement_desc = get_field('achivement_desc','option');
             ?>
            <h2><?php echo esc_html($achivement_title_1);?> <span style="color:<?php echo esc_html($achivement_title_2_color);?>;"><?php echo esc_html($achivement_title_2);?></span></h2>
            <p><?php echo esc_html($achivement_desc);?></p>
        </div>

         <div class="row">
            <?php 
            $achivement_counter = get_field('achivement_counter','option');
            foreach($achivement_counter as $counter){
            ?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="<?php echo $counter['achivement_count_image']['url'];?>" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count"><?php echo $counter['achivement_count_number'];?></h2>
                        <span><?php echo $counter['achivement_count_title'];?></span>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>

        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">

                <?php $achieve_image = get_field('achieve_image','option');
                    foreach($achieve_image as $achieve_image){
                ?>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="<?php echo $achieve_image['achive_ima']['url'];?>">
                    </div>
                    <div class="row g-0">
                       <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(<?php echo $achieve_image['achi_bg']['url'];?>);">

                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p><?php echo esc_html($achieve_image['achivement_desc']);?></p>
                                <div class="testi-info">
                                    <?php print_r($achieve_image['achivement_title']); ?>
                                   <h5><?php echo esc_html($achieve_image['achivement_title']);?></h5>
                                   <span><?php echo esc_html($achieve_image['achivement_std_depart']);?></span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="<?php echo get_template_directory_uri();?>/assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>

                <?php } ?>

            </div>
            <div class="testimonial-image-slider">
                <?php $achieve_image = get_field('achieve_image','option');
                    foreach($achieve_image as $achieve_image){
                ?>
                <div class="sin-testi-image">
                    <img src="<?php echo $achieve_image['achive_ima']['url'];?>" alt="">
                </div>
                <?php } ?>

            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt="" src="<?php echo get_template_directory_uri();?>/assets/img/icon-img/testi-text.png">
        </div>
    </div>
</div>





<div class="register-area bg-img pt-130 pb-130" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/bg/bg-2.jpg);">
    <div class="container">
        <?php
         $register_title = get_field('register_title','option');
         $register_desc = get_field('register_desc','option');
         $register_form_title = get_field('register_form_title','option');

        ?>
        <div class="section-title-2 mb-75 white-text">
            <h2><?php echo $register_title; ?></h2>
            <p><?php echo $register_desc; ?></p>
        </div>
        <div class="register-wrap">
            <div id="register-3" class="mouse-bg">
                <?php
                 $winter_title = get_field('winter_title','option');
                 $year_name = get_field('year_name','option');
                 $admission = get_field('admission','option');
                 $admission_image = get_field('admission_image','option');
                ?>
                <div class="winter-banner">
                    <img src="<?php echo $admission_image['url']; ?>" alt="">
                    <div class="winter-content">
                        <span><?php echo $winter_title; ?> </span>
                        <h3><?php echo $year_name; ?> </h3>
                        <span><?php echo $admission; ?> </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-8">
                    <div class="register-form">
                        <h4><?php echo $register_form_title; ?></h4>
                        <?php echo do_shortcode('[contact-form-7 id="144" title="Untitled"]'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="register-1" class="mouse-bg"></div>
    <div id="register-2" class="mouse-bg"></div>
</div>


<?php get_template_part( 'templates/content', 'teacher' ); ?>

<?php $our_event_bg =get_field('our_event_bg','option');?>
<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url(<?php echo $our_event_bg['url']; ?>);">
    <div class="container">
        <?php
         $our_event_title =get_field('our_event_title','option');
         $our_event_desc =get_field('our_event_desc','option');
        ?>
        <div class="section-title mb-75">
            <h2><?php echo $our_event_title; ?></h2>
            <p><?php echo $our_event_desc; ?></p>
        </div>
        <div class="event-active owl-carousel nav-style-1">
             <?php
              $ourevent = null;
              $ourevent = new WP_query(array(
                'post_type' => 'ourevent',
                'posts_per_page' => -1,
              ));
              if( $ourevent->have_posts() ){
                while ($ourevent->have_posts() ){
                    $ourevent->the_post();
                    $time = wp_date( 'g:i A' );
                    $our_event_location = get_field('our_event_location');
                    ?>
                        <div class="single-event event-white-bg">
                            <div class="event-img">
                                <a href="event-details.html"><img src="<?php the_post_thumbnail_url('ourevent');?>" alt=""></a>
                                <div class="event-date-wrap">
                                    <span class="event-date"><?php the_time( ' jS' ); ?></span>
                                    <span><?php the_time( ' F ' ); ?></span>
                                    
                                </div>
                            </div>
                            <div class="event-content">
                                <h3><a href="event-details.html"><?php echo wp_trim_words(get_the_title(),'4','...'); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(),'20','.....'); ?></p>
                                <div class="event-meta-wrap">
                                    <div class="event-meta">
                                        <i class="fa fa-location-arrow"></i>
                                        <span><?php echo $our_event_location;?></span>
                                    </div>
                                    <div class="event-meta">
                                        <i class="fa fa-clock-o"></i>
                                        <span><?php echo $time; ?></span>
                                    </div>
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
        </div>
    </div>
</div>
<div class="blog-area pt-130 pb-100">
    <div class="container">
        <?php
         $our_newsfeed_title = get_field('our_newsfeed_title','option');
         $our_newsfeed_desc = get_field('our_newsfeed_desc','option');
         ?>
        <div class="section-title mb-75">
            <h2><?php echo $our_newsfeed_title; ?></h2>
            <p><?php echo $our_newsfeed_desc; ?></p>
        </div>
        <div class="row">
             <?php
              $basicpost = null;
              $basicpost = new WP_query(array(
                'post_type' => 'post',
                'posts_per_page' => 4,
              ));
              if( $basicpost->have_posts() ){
                while ($basicpost->have_posts() ){
                    $basicpost->the_post();
                    $categories = get_the_category();
                    ?>
                      <div class="col-lg-3 col-md-6">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="<?php the_post_thumbnail_url('our_post');?>" alt=""></a>
                            </div>
                            <div class="blog-content-wrap">
                                <span><?php echo $categories[0]->name;?></span>
                                <div class="blog-content">
                                    <h4><a href="blog-details.html"><?php echo wp_trim_words(get_the_title(),'4','...');?></a></h4>
                                    <p><?php echo wp_trim_words(get_the_content(),'20','....');?></p>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i> <?php echo get_the_author(); ?>
</a></li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i> <?php echo get_comments_number();?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-date">
                                    <a href="#"><i class="fa fa-calendar-o"></i><?php the_time( 'F jS, Y' ); ?></a>
                                </div>
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
        </div>
    </div>
</div>



<?php get_footer(); ?>