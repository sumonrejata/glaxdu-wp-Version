<div class="teacher-area pt-130 pb-100">
    <div class="container">
        <?php
         $best_teacher_title =get_field('best_teacher_title','option'); 
         $best_teacher_desc =get_field('best_teacher_desc','option'); 
         ?>
        <div class="section-title mb-75">
            <h2><?php echo $best_teacher_title;?></h2>
            <p><?php echo $best_teacher_desc;?></p>
        </div>
        <div class="custom-row">
             <?php
              $teacher = null;
              $teacher = new WP_query(array(
                'post_type' => 'teacher',
                'posts_per_page' => -1,
                'order'          =>'ASC',
              ));
              if( $teacher->have_posts() ){
                while ($teacher->have_posts() ){
                    $teacher->the_post();
                    $teacher_desig = get_field('teacher_desig');
                    $teacher_description = get_field('teacher_description');
                    ?>

                    <div class="custom-col-5">
                        <div class="single-teacher mb-30">
                            <div class="teacher-img">
                                <img src="<?php the_post_thumbnail_url('teacher_img');?>" alt="">
                            </div>
                            <div class="teacher-content-visible">
                                <h4><?php echo wp_trim_words(get_the_title(),'3');?></h4>
                                <h5><?php echo $teacher_desig; ?></h5>
                            </div>
                            <div class="teacher-content-wrap">
                                <div class="teacher-content">
                                    <h4><?php echo wp_trim_words(get_the_title(),'3');?></h4>
                                    <h5><?php echo $teacher_desig; ?></h5>
                                    <p><?php echo $teacher_description; ?></p>
                                    <div class="teacher-social">
                                        <ul>
                                            <?php
                                                $teacher_social = get_field('teacher_social');
                                                foreach($teacher_social as $teacher_socials){
                                            ?>
                                            <li><a style="color:<?php echo $teacher_socials['teacher_social_color'];?>;" href="#"><i class="<?php echo $teacher_socials['teacher_social_icon']; ?>"></i></a></li>
                                            <?php } ?>

                                        </ul>
                                    </div>
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