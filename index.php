<?php
get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">

                        <?php if ( have_posts() ) :

                             while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', get_post_format());

                            endwhile; ?>

                        <div class="alaa-pagination"><?php echo paginate_links(); ?></div>
                       <?php else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    </div>
                </div>
            </div> <!--.container-->
        </main>
    </div> <!--#primary-->


<?php get_footer(); ?>