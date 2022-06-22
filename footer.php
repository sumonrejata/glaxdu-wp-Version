<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(assets/img/bg/bg-4.jpg);">
        <div class="container">
            <div class="row">

               <div class="col-lg-3 col-md-6 col-sm-6">
                <?php
                    if(is_active_sidebar('about_us')) {
                        dynamic_sidebar('about_us');
                    }
                ?>
                </div>


                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-list">
                        <?php
                            if(is_active_sidebar('quick_link')) {
                                dynamic_sidebar('quick_link');
                            }
                        ?>
                    </div>
                    

                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        
                        <div class="footer-list">
                            <?php
                            if(is_active_sidebar('footer_courses')) {
                                dynamic_sidebar('footer_courses');
                            }
                            ?>
                        </div>
                   </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-gallery">
                            <?php
                                if(is_active_sidebar('footer_gallery')) {
                                    dynamic_sidebar('footer_gallery');
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="subscribe-style">
                            <?php
                                if(is_active_sidebar('newslater')) {
                                    dynamic_sidebar('newslater');
                                }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <?php
                     $footer_copy_right = get_field('footer_copy_right','option');
                     $footer_developer = get_field('footer_developer','option');
                     $footer_developer_link = get_field('footer_developer_link','option');
                    ?>
                    <div class="copyright">
                        <p>
                            <?php echo $footer_copy_right;?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="<?php echo $footer_developer_link;?>"><?php echo $footer_developer; ?></a></li>
                                
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <?php
                                    $footer_social_icon = get_field('footer_social_icon','option');
                                    foreach($footer_social_icon as $footer_social_icons){
                                ?>
                                <li><a style="color:<?php echo $footer_social_icons['social_icon_color'];?>" href="<?php echo $footer_social_icons['social_icon_link'];?>"><i class="fa fa-<?php echo $footer_social_icons['social_icon_name'];?>"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>