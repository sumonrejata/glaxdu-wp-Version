<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <?php
             $brand_image = get_field('brand_image','option');
             foreach( $brand_image as  $brand_images){
            ?>
            <div class="single-brand-logo">
                <a href="#"><img src="<?php echo $brand_images['brand_img']['url']; ?>" alt=""></a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>