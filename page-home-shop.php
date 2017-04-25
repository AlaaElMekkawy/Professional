<?php
get_header();


    get_template_part( 'template-parts/content', 'jssor-slider');

?>
<div class="departments">
    <div class="row">


        <div class="col-sm-4 col-xs-12 item">
            <div class="women-cat ">
                <img class="background-image img-responsive" src="<?php echo get_template_directory_uri() .'/images/jewellery1.jpg'?>"/>
                <h3>women collections</h3>
            </div>
        </div>

            <div class="col-sm-4 col-xs-12 item">
                 <div class="women-cat">
                    <img class="background-image img-responsive" src="<?php echo get_template_directory_uri() .'/images/men.jpg'?>"/>
                <h3>men collections</h3>
             </div>
            </div>

                <div class="col-sm-4 col-xs-12 item">
                    <div class="women-cat ">
                         <img class="background-image img-responsive" src="<?php echo get_template_directory_uri() .'/images/kids.jpg'?>"/>
                <h3>kids collections</h3>
            </div>
        </div>

    </div>
</div>


<!--nwe arrival section-->

<div class="container al-section">
    <div class="new-items">
        <div class="items">
            <h2> recent arrival</h2>
            <?php echo do_shortcode( '[recent_products per_page="4" columns="4"]' ); ?>

        </div>
    </div>
</div>
<?php wp_reset_postdata();  ?>

 <!--featured-->
<div class="advert">
    <div class="row">
        <div class="col-sm-4 col-xs-12 feature">
        <h2> shopping safely </h2>
        </div>

        <div class="col-sm-8 col-xs-12 info">
        <p>Lorem ipsum dolor sit amet, mattis diam hac nunc et, sodales nulla amet hymenaeos diam, ac nulla eleifend posuere, tempor bibendum ante dolor gravida. Sit facilisis vehicula a, sit ultrices leo non aliquet, ornare id luctus sit.
        </p>
        </div>
    </div>
</div>

<!-- top sale-->

<div class="container al-section">
    <div class="new-items">
        <div class="items">
            <h2>Best Selling</h2>
            <?php echo do_shortcode( '[best_selling_products per_page="3" columns="3"]' ); ?>

        </div>
    </div>
    </div>
    <?php wp_reset_postdata(); ?>



    <!--featured-->
    <div class="advert">
        <div class="row">
            <div class="col-sm-4 col-xs-12 feature">
                <h2>lowest prices </h2>
            </div>

            <div class="col-sm-8 col-xs-12 info">
                <p>Lorem ipsum dolor sit amet, mattis diam hac nunc et, sodales nulla amet hymenaeos diam, ac nulla eleifend posuere, tempor bibendum ante dolor gravida. Sit facilisis vehicula a, sit ultrices leo non aliquet, ornare id luctus sit.
                </p>
            </div>
        </div>
    </div>


    <div class="container al-section">
        <div class="new-items">
            <div class="items">
                <h2> shop by category</h2>
                <?php echo do_shortcode( '[product_categories number="4" parent="0"]
' ); ?>

            </div>
        </div>
    </div>
<?php wp_reset_postdata();  ?>



    <!--featured-->
    <div class="advert">
        <div class="row">
            <div class="col-sm-4 col-xs-12 feature">
                <h2>free shipping all area </h2>
            </div>

            <div class="col-sm-8 col-xs-12 info">
                <p>Lorem ipsum dolor sit amet, mattis diam hac nunc et, sodales nulla amet hymenaeos diam, ac nulla eleifend posuere, tempor bibendum ante dolor gravida. Sit facilisis vehicula a, sit ultrices leo non aliquet, ornare id luctus sit.
                </p>
            </div>
        </div>
    </div>



    <div class="container al-section">
        <div class="new-items">
            <div class="items">
                <h2> Top rated products</h2>
                <?php echo do_shortcode( '[top_rated_products per_page="12"]

' ); ?>

            </div>
        </div>
    </div>
<?php wp_reset_postdata();  ?>


<?php get_template_part( 'template-parts/content', 'clints'); ?>

<?php get_footer(); ?>