<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/25/2017
 * Time: 10:07 PM
 */


?>

<?php
get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">

            <div class="row">
                <header class=" col-xs-12 header">
                    <h2>contact us</h2>
                   <P class="text-center"> Lorem ipsum dolor sit amet, mattis diam hac nunc et, sodales nulla amet hymenaeos diam, ac nulla eleifend posuere, tempor bibendum ante dolor gravida. Sit facilisis vehicula a, sit ultrices leo non aliquet, ornare id luctus sit. Aenean lorem eget scelerisque sit, dui venenatis ante nisl in.</P>
                </header>
            </div>

                <div class="send-msg">
                    <h2>Send Message</h2>
                    <div class="contact-form  form-group">
<!--     --><?php echo do_shortcode( '[contact-form-7 id="568" title="Alaa"]' ); ?>
                    </div>
                </div>


        </div> <!--.container-->
<div class="gmap">
        <h2>Find Us</h2>

        <div id="style-selector-control"  class="map-control">
            <select id="style-selector" class="selector-control">
                <option value="default">Default</option>
                <option value="silver">Silver</option>
                <option value="night">Night mode</option>
                <option value="retro" selected="selected">Retro</option>
                <option value="hiding">Hide features</option>
            </select>
        </div>
        <div id="map"></div>
</div>
    </main>
</div> <!--#primary-->


<?php get_footer(); ?>

