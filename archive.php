<?php
get_header(); ?>






            <div class="container">

                <?php if ( have_posts() ) : ?>
                    <header class="page-header text-center">
                        <?php
                        the_archive_title( '<h2 class="page-title">', '</h2>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                    </header><!-- .page-header -->
                <?php endif; ?>


                <div class="row">
                    <div class="col-sm-9">

                        <?php if ( have_posts() ) :

                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', get_post_format() );


                            endwhile; ?>

                            <div class="alaa-pagination"><?php echo paginate_links(); ?></div>
                        <?php else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif; ?>
                    </div>

                    <div class="col-sm-3">
                        <div class="side-bar">
                            <?php dynamic_sidebar('alaa-right-sidebar'); ?>
                        </div>
                    </div>

                </div>
            </div> <!--.container-->



<?php get_footer(); ?>