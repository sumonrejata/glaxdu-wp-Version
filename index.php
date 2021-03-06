<?php
/*
    Template Name: Blog
*/
 get_header(); 
?>
<?php
 $blog_breadcrumb =get_field('blog_breadcrumb','option');
?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(<?php echo $blog_breadcrumb['url'];?>);">
        <div class="container">
            <h2><?php the_title();?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url();?>">Home</a> <span><i class="fa fa-angle-double-right"></i><?php echo get_the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">
                         <?php
                          $even_post = null;
                          $even_post = new WP_query(array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                          ));
                          if( $even_post->have_posts() ){
                            while ($even_post->have_posts() ){
                                $even_post->the_post();
                                $categories = get_the_category();
                                
                                ?>

                                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="single-blog mb-30">
                                        <div class="blog-img">
                                            <a href="blog-details.html"><img src="<?php the_post_thumbnail_url('our_post');?>" alt=""></a>
                                        </div>
                                        <div class="blog-content-wrap">
                                            <span><?php echo $categories[0]->name; ?></span>
                                            <div class="blog-content">
                                                <h4><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),'4','...');?></a></h4>
                                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                                <div class="blog-meta">
                                                    <ul>
                                                        <li><a href="<?php the_permalink(); ?>"><i class="fa fa-user"></i><?php echo get_the_author(); ?></a></li>
                                                        <li><a href="<?php the_permalink();?>"><i class="fa fa-comments-o"></i> <?php echo get_comments_number();?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog-date">
                                                <a href="<?php the_permalink(); ?>"><i class="fa fa-calendar-o"></i> <?php the_time( 'F jS, Y' ); ?></a>
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

                    <?php the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( 'Back', 'textdomain' ),
                        'next_text' => __( 'Onward', 'textdomain' ),
                    ) ); ?>
                    <div class="pro-pagination-style text-center mt-25">

                        <ul>
                            <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
   
                    </div> 

                     <div class="pro-pagination-style text-center mt-25">

                        <ul>
                             <?php the_posts_pagination( array(
                            'mid_size'  => 3,
                            'prev_text' => '<li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>', 'textdomain',
                            'next_text' => '<li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>', 'textdomain',
                        ) ); 
                        ?>
                        </ul>
                       
                    </div>
                </div>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_template_part( 'templates/content', 'brandlogo' ); ?>

<?php get_footer(); ?>
