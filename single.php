<?php get_header(); ?>
<div class="breadcrumb-area">
    <?php $single_bradcum = get_field('single_bradcum','option');?>
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(<?php echo $single_bradcum['url'];?>);">
        <div class="container">
            <h2><?php the_title();?></h2>
            <p><?php echo wp_trim_words(get_the_content(),'20');?></p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li>
                    <a href="<?php echo site_url();?>">Home</a> <span><i class="fa fa-angle-double-right">
                    </i>
                        <?php echo get_the_title( get_option('page_for_posts', true) ); ?>
                        </span>
                    </li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-details-wrap mr-40">
                    <?php 
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                $categories = get_the_category();

                                ?>
                                 <div class="blog-details-top">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                    <div class="blog-details-content-wrap">
                                        <div class="b-details-meta-wrap">
                                            <div class="b-details-meta">
                                                <ul>
                                                    <li><i class="fa fa-calendar-o"></i><?php the_time( 'F jS, Y' ); ?></li>
                                                    <li><i class="fa fa-user"></i><?php echo get_the_author(); ?></li>
                                                    <li><i class="fa fa-comments-o"></i> 10</li>
                                                </ul>
                                            </div>
                                            <span><?php echo $categories[0]->name; ?></span>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                        <blockquote>
                                            <i class="quote-top fa fa-quote-left"></i>
                                            Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariaatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit 
                                            <i class="quote-bottom fa fa-quote-right"></i>
                                        </blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <div class="blog-share-tags">
                                            <div class="blog-share">
                                                <div class="blog-btn">
                                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="blog-social">
                                                    <ul>
                                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog-tag">
                                                <ul>
                                                    <?php
                                                        $posttags = get_the_tags();
                                                        if ($posttags) {
                                                          foreach($posttags as $tag) { ?>
                                                            <li><a href="<?php echo get_tag_link( $tag->term_id);?>"><?php echo $tag->name;?></a></li>
                                                          <?php }
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } // end while
                        } // end if
                    ?>
                   

                    <div class="blog-author mt-80">
                        <div class="author-img">
                            <?php
                            $user = wp_get_current_user();
                             
                            if ( $user ) :
                                ?>
                                <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="">
                               
                            <?php endif; ?>
                            
                        </div>
                        <div class="author-content">
                            <div class="author-content-top">
                                <div class="blog-designation">
                                    <h5><?php the_author();?></h5>
                                    <?php $authorname = get_the_author_meta('nickname');?>
                                    <span><?php echo $authorname; ?></span>
                                </div>
                                <div class="author-social">
                                    <ul>
                                        <li><a class="facebook" href="<?php echo get_the_author_meta('facebook');?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="instagram" href="<?php echo get_the_author_meta('instagram');?>"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="twitter" href="<?php echo get_the_author_meta('twitter');?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google" href="<?php echo get_the_author_meta('google');?>"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><?php the_author_description(); ?></p>
                        </div>
                    </div>

                    <div class="related-course pt-70">
                        <div class="related-title mb-45">
                            <h3>Related Blog</h3>
                            <p>Hempor incididunt ut labore et dolore mm, itation ullamco laboris <br>nisi ut aliquip. </p>
                        </div>
                             <div class="related-slider-active related-blog-slide pb-80">
                            <?php
                                $related = new WP_Query(
                                    array(
                                        'category__in'   => wp_get_post_categories( $post->ID ),
                                        'posts_per_page' => 5,
                                        'post__not_in'   => array( $post->ID )
                                    )
                                );

                                if( $related->have_posts() ) { 
                                    while( $related->have_posts() ) { 
                                        $related->the_post();
                                        $categories = get_the_category();
                                        ?>
                                        <div class="single-blog">
                                            <div class="blog-img">
                                                <a href="#"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
                                            </div>
                                            <div class="blog-content-wrap">
                                                <span><?php echo $categories[0]->name; ?></span>
                                                <div class="blog-content">
                                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                                    <p><?php echo wp_trim_words(get_the_content(),'20');?></p>
                                                    <div class="blog-meta">
                                                        <ul>
                                                            <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="fa fa-user"></i><?php echo get_the_author(); ?></a></li>
                                                            <li><a href="<?php the_permalink();?>"><i class="fa fa-comments-o"></i> <?php echo get_comments_number();?></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="blog-date">
                                                    <a href="#"><i class="fa fa-calendar-o"></i><?php the_time( 'F jS, Y' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    wp_reset_postdata();
                                }
                            ?>
                        </div>
                    </div>


                    <div class="blog-comment">
                        <div class="blog-comment-btn mb-80 commrnt-toggle">
                            <a href="#">VIEW COMMENT</a>
                        </div>
                        <div class="blog-comment-content-wrap">
                            <h4>COMMENT</h4>
                            <div class="single-blog-comment">
                                <div class="blog-comment-img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-comment.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h5>AYESHA HOQUE</h5>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut laboperspiciatis und.</p>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            <div class="single-blog-comment child-comment">
                                <div class="blog-comment-img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-comment-2.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h5>AYESHA HOQUE</h5>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut laboperspiciatis und.</p>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            <div class="single-blog-comment">
                                <div class="blog-comment-img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-comment-3.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h5>AYESHA HOQUE</h5>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut laboperspiciatis und.</p>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php comments_template( 'comments.php' ); ?> 

                </div>
            </div>


            <?php get_sidebar(); ?>
            
        </div>
    </div>
</div>
<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
