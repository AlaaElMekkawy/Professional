<?php
/**
 * Created by PhpStorm.
 * User: Alaa
* Date: 3/22/2017
* Time: 9:43 AM
*/

?>

<!-- Carousel
 ================================================== -->

    <?php if ( is_front_page() && get_theme_mod('front_header_type') == 'slider') : ?>



    <div id="alaa-arousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <?php for ($i=1; $i < 4; $i++) {
                if ($i == 1) {
                    $alaa_slider_title = get_theme_mod('alaa_slider_title1', __('Free WordPress Themes', 'alaa'));
                    $alaa_slider_subtitle = get_theme_mod('alaa_slider_subtitle1', __('Create website in no time', 'alaa'));
                    $alaa_slider_image = get_theme_mod('alaa_slider_image1', get_template_directory_uri() . '/images/bg.jpg');
                } else {
                    $alaa_slider_title = get_theme_mod('alaa_slider_title' . $i);
                    $alaa_slider_subtitle = get_theme_mod('alaa_slider_subtitle' . $i);
                    $alaa_slider_image = get_theme_mod('alaa_slider_image' . $i);
                }


                if ($alaa_slider_image) {
                    ?>

                    <div class="item <?php if ($i == 1) { echo ' active' ;} ?> ">


                        <img class="first-slide" src="<?php echo esc_url($alaa_slider_image); ?>" alt="First slide">

                        <?php if ($alaa_slider_title || $alaa_slider_subtitle) { ?>

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1><?php echo esc_html($alaa_slider_title); ?></h1>
                                    <p><?php echo esc_html($alaa_slider_subtitle); ?></p>
                                    <p><a class="btn" href="<?php echo get_permalink( get_option( 'woocommerce_shop_page_id' ) ); ?>" role="button">Store</a></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php }
            }
            ?>

            <a class="left carousel-control" href="#alaa-arousel" role="button" data-slide="prev">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#alaa-arousel" role="button" data-slide="next">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->
    </div><!-- /.carousel -->



    <!--image header front page-->
<?php elseif ( is_front_page() && get_theme_mod('front_header_type') == 'image'): ?>
    <div class="front-header " style="background-image: url(<?php echo get_theme_mod('header_image');  ?>); height:<?php echo get_theme_mod('header_height'); ?>px">
        <div class="overlay">

        <div class="header-detail text-center">
            <h1><?php  echo get_theme_mod('alaa_image_title') ;?></h1>
            <h2><?php  echo get_theme_mod('alaa_image_subtitle') ;?></h2>
            <p><?php  echo get_theme_mod('alaa_image_info'); ?></p>
            <button class="btn-defualt"><?php echo get_theme_mod('alaa_image_btn') ?></button>
        </div>
        </div>
    </div>




    <!--image header other page-->
<?php elseif ( ! is_front_page() && get_theme_mod('site_header_type') == 'image' && ! is_page('home-shop')): ?>

    <?php
    function alaa_featured_image() {

        $url='' ;

        //Execute if singular
        if (  get_option('page_for_posts') && ! get_query_var('product')&& ! is_single()) {

            $id = get_queried_object_id ();

            // Check if the post/page has featured image
            if ( has_post_thumbnail( $id ) ) {

                // Change thumbnail size, but I guess full is what you'll need
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

                $url = $image[0];

            } else {

                //Set a default image if Featured Image isn't set
                $url = get_template_directory_uri() . '/images/banar.jpg';


            }

        } else {

            //Set a default image if Featured Image isn't set
            $url = get_template_directory_uri() . '/images/banar.jpg';

        }

        return $url;
    }
    ?>



    <header class=" entry-title header-normal" style=" background-image: url(<?php echo alaa_featured_image(); ?>) ">
               <div class="overlay" >

        <div class="header-crumb">

            <h2><?php single_post_title(); ?></h2>
            <?php do_action( 'alaa_breadcrumbs' ); ?>
        </div>
    </div>
    </header>

<?php endif ?>