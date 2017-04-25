<?php
get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">


                        <?php
                        if( have_posts() ):
                            while ( have_posts() ): the_post();

                        the_content();

                            endwhile;

                        endif;

                        ?>
                    </div>
                </div>
            </div> <!--.container-->
        </main>
    </div> <!--#primary-->


<?php get_footer(); ?>