<?php
get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">

                        <?php if ( have_posts() ) : ?>

                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'single' );
                                ?>


                                <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                ?>

                            <?php endwhile; ?>


                        <?php else : ?>

                            <?php get_template_part( 'template-parts/content', 'none' ); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-sm-3 ">
                        <div class="side-bar">
                        <?php dynamic_sidebar('alaa-right-sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div> <!--.container-->
        </main>
    </div> <!--#primary-->


<?php get_footer(); ?>