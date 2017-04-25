<?php get_header(); ?>



<!-- start content container -->



    <div class="container">
        <div class="row ">
            <div class="col-md-9 main">

                <h2 class="entry-title"><?php  	woocommerce_page_title(); ?></h2>


			<?php woocommerce_content(); ?>

            </div><!-- /#content -->

        <div class="col-md-3 col-xs-12 ">
            <div class="side-bar">
                <?php dynamic_sidebar('shop'); ?>
            </div>
        </div>

        </div>
    </div>
<!-- end content container -->

<?php get_footer(); ?>

