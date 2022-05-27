<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">


<!-- Mirrored from template.hasthemes.com/glaxdu/glaxdu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 12:10:52 GMT -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
  
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/icon-img/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        
                        <ul>
                            <?php $header_address_info = get_field('header_address_info','option');
                            foreach($header_address_info as $header_addre){
                        ?>
                        <?php if($header_addre['header_info']) : ?>
                            <li><i class="<?php echo $header_addre['header_icon'];?>"></i> <?php echo $header_addre['header_info'];?>
                        </li>
                    <?php endif; ?>
                             <?php } ?>
                        </ul>
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><a href="login-register.html">Login</a></li>
                            <li><a href="login-register.html">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <?php $logo = get_field('logo','option');?>
                    <?php if($logo['url']) : ?>
                    <div class="logo">
                        <a href="<?php echo site_url();?>">
                            <img alt="" src="<?php echo $logo['url'];?>">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <?php 
                                    wp_nav_menu( array( 
                                        'theme_location' => 'main_menu',
                                        // 'menu_class'        =>'submenu',
                                        'walker'            => new Glaxdu_Walker_Nav_Menu()
                                         ) );
                                    ?>

                            </nav>
                        </div>
                        <div class="cart-search-wrap">
                            <div class="cart-wrap">
                                <button class="icon-cart">
                                    <i class="fa fa-cart-plus"></i>
                                    <span class="count-style">02</span>
                                </button>
                                <div class="shopping-cart-content">
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-1.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/cart-2.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>Shipping : <span>$20.00</span></h4>
                                        <h4>Total : <span class="shop-total">$260.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a class="default-btn btn-hover" href="cart.html">view cart</a>
                                        <a class="default-btn btn-hover" href="checkout.html">checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.html">HOME</a>
                                <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                    <li><a href="index-3.html">home version 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 04</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="course.html">course page</a></li>
                                    <li><a href="event.html">event page</a></li>
                                    <li><a href="shop.html">shop page</a></li>
                                    <li><a href="course-details.html">course details</a></li>
                                    <li><a href="event-details.html">event details</a></li>
                                    <li><a href="single-product.html">single product</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="login-register.html">login / register</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>