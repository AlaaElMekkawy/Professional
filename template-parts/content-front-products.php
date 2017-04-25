<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/26/2017
 * Time: 4:08 PM
 */

?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container ">

            <!--recent products-->
            <div class="row">
                <div class="col-xs-12 woo-front al-section">
                    <header class="text-center">
                        <h2 class="entry-title section-title"> <?php esc_html_e( 'Recent products', 'alaa' ); ?></h2>
                    </header>

                    <?php echo do_shortcode( '[recent_products per_page="8" columns="4"]' ); ?>

                </div>
            </div>
        </div>


        <?php wp_reset_postdata(); ?>

