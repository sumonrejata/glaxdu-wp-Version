<?php
/*
    Template Name: Contact
*/
 get_header();?>
<div class="breadcrumb-area">
    <?php
     $breadcrumb_image = get_field('breadcrumb_image','option');
     $breadcrumb_title = get_field('breadcrumb_title','option');
     $breadcrumb_description = get_field('breadcrumb_description','option');
    ?>
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url(<?php echo $breadcrumb_image['url']; ?>);">
        <div class="container">
            <h2><?php echo $breadcrumb_title; ?></h2>
            <p><?php echo $breadcrumb_description; ?></p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url();?>">Home</a> <span><i class="fa fa-angle-double-right"></i><?php the_title();?></span></li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <?php 
                $contact_map_link = get_field('contact_map_link','option');
                ?>
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map"></div>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                $contact_form_title = get_field('contact_form_title','option');
                $contact_form_desc = get_field('contact_form_desc','option');
                ?>
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2><span><?php echo $contact_form_title; ?></span></h2>
                        <p><?php echo $contact_form_desc; ?></p>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="355" title="Contactpage"]');?>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
 $contact_counter_bg = get_field('contact_counter_bg','option');
 ?>
<div class="contact-info-area bg-img pt-180 pb-140 default-overlay" style="background-image:url(<?php echo $contact_counter_bg['url'];?>);">
    <div class="container">
        <div class="row">

            <?php $contact_counter =get_field('contact_counter','option');
                foreach($contact_counter as $contact_counters){
            ?>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="<?php echo $contact_counters['counter_icon'];?>"></i></span>
                    </div>
                    <p><?php echo $contact_counters['counter_title'];?></p>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<br>
<br>
<br>
<?php get_template_part( 'templates/content', 'brandlogo' ); ?>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
<script>
    function init() {
        var mapOptions = {
            zoom: 11,
            scrollwheel: false,
            center: new google.maps.LatLng(23.7598, 90.3913),
            styles: 
            [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.7598, 90.3913),
            map: map,
            icon: 'assets/img/icon-img/2.png',
            animation:google.maps.Animation.BOUNCE,
            title: 'Snazzy!'
        });
    }
    google.maps.event.addDomListener(window, 'load', init);
</script>
<!-- Main JS -->

<?php get_footer(); ?>


