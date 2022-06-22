<?php

/*
    Template Name: About
*/
 get_header();

 ?>
<div class="breadcrumb-area">
    <?php
     $breadcrumb_about_img = get_field('breadcrumb_about_img','option');
    ?>
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(<?php echo $breadcrumb_about_img['url']; ?>);">
        <div class="container">
            <h2><?php the_title();?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url();?>">Home</a> <span><i class="fa fa-angle-double-right"></i> <?php echo get_the_title(); ?>
</span></li>
            </ul>
        </div>
    </div>
</div>

<?php $about_bg_image = get_field('about_bg_image','option');?>
<div class="choose-area bg-img pt-90" style="background-image:url(<?php echo $about_bg_image['url'];?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="about-chose-us pt-120">
                    <div class="row">
                         <?php
                              $scholarship = null;
                              $scholarship = new WP_query(array(
                                'post_type' => 'scholarship',
                                'posts_per_page' => -1,
                              ));
                              if( $scholarship->have_posts() ){
                                while ($scholarship->have_posts() ){
                                    $scholarship->the_post();
                                   
                                    ?>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="single-about-chose-us mb-95">
                                            <div class="about-choose-img">
                                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                            </div>
                                            <div class="about-choose-content text-light-blue">
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
            <?php $about_section_image = get_field('about_section_image','option');?>
            <div class="col-lg-4 col-md-12">
                <div class="about-img">
                    <img src="<?php echo $about_section_image['url'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    $about_video_bg = get_field('about_video_bg','option');
    $about_video_url = get_field('about_video_url','option');
    $about_video_icon_image = get_field('about_video_icon_image','option');
?>
<div class="video-area bg-img pt-270 pb-270" style="background-image:url(<?php echo $about_video_bg['url'];?>);">
    <div class="video-btn-2">
        <a class="video-popup" href="<?php echo $about_video_url; ?>">
            <img class="animated" src="<?php echo $about_video_icon_image['url']; ?>" alt="">
        </a>
    </div>
</div>

<?php get_template_part( 'templates/content', 'teacher' ); ?>

<?php
 $fun_fact_bg = get_field('fun_fact_bg', 'option');
?>
<div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url(<?php echo $fun_fact_bg['url'];?>);">
    <div class="container">
        <?php
         $fun_fact_title = get_field('fun_fact_title', 'option');
         $fun_fact_desc = get_field('fun_fact_desc', 'option');
        ?>
        <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-100">
            <h2><?php echo $fun_fact_title; ?></h2>
            <p><?php echo $fun_fact_desc; ?> </p>
        </div>
        <div class="row">
            <?php
                $fan_fact_counter = get_field('fan_fact_counter','option');
                foreach($fan_fact_counter as $fan_fact_counters){
            ?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one count-white">
                    <div class="count-img">
                        <img src="<?php echo $fan_fact_counters['funfact_image']['url'];?>" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count"><?php echo $fan_fact_counters['funfact_counter']; ?></h2>
                        <span><?php echo $fan_fact_counters['funfact_title']; ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>What <span>People Say</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b1.jpg">
                    </div>
                   <div class="row g-0">
                       <div class="ms-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>AYESHA HOQUE</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b3.jpg">
                    </div>
                   <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis</p>
                                <div class="testi-info">
                                   <h5>Tayeb Rayed</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                   <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Robiul siddikee</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                    <div class="row g-0">
                       <div class="ms-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Modhu Dada</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s2.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s1.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s3.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt="" src="assets/img/icon-img/testi-text.png">
        </div>
    </div>
</div>
    
<?php get_template_part( 'templates/content', 'brandlogo' ); ?>

<?php get_footer(); ?>
