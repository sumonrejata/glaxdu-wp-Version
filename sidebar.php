<div class="col-xl-3 col-lg-4">
    <div class="sidebar-style">
        <div class="sidebar-search mb-40">

            <?php
                if(is_active_sidebar('glaxdu_search')) {
                    dynamic_sidebar('glaxdu_search');
                }
            ?>

        </div>
        <div class="sidebar-about mb-40">
            <?php
                if(is_active_sidebar('about_sidebar')) {
                    dynamic_sidebar('about_sidebar');
                }
            ?>
        </div>

        <div class="sidebar-about mb-40">
            <?php
                if(is_active_sidebar('gallery_widget_test')) {
                    dynamic_sidebar('gallery_widget_test');
                }
            ?>
        </div>



        <div class="sidebar-recent-post mb-35">
            <?php
                if(is_active_sidebar('glaxdu_recent_post')) {
                    dynamic_sidebar('glaxdu_recent_post');
                }
            ?>
           
        </div>
        <div class="sidebar-category mb-40">
            <?php
                if(is_active_sidebar('glaxdu_category')) {
                    dynamic_sidebar('glaxdu_category');
                }
            ?>

        </div>
        <div class="sidebar-recent-course-wrap mb-40">
            <?php
                if(is_active_sidebar('glaxdu_recent_cource')) {
                    dynamic_sidebar('glaxdu_recent_cource');
                }
            ?>
            
            
        </div>
        <div class="sidebar-tag-wrap">
            <?php
                if(is_active_sidebar('glaxdu_tag')) {
                    dynamic_sidebar('glaxdu_tag');
                }
            ?>

        </div>
    </div>
</div>