<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 2/22/2017
 * Time: 10:48 AM
 */

?>


    <article id="post-<?php the_ID(); ?>" <?php post_class('alaa-standard-format'); ?>>
        <header class="entry-header text-center">
            <?php the_title( '<h2 class="entry-title"><a href="' . esc_url(get_permalink()) .'" rel="bookmark">', '</a></h2>'); ?>

            <?php get_template_part( 'template-parts/postmeta', '' ); ?>

        </header>

        <div class="alaa-post-wrapper">
            <div class="entry-figure">
                <?php if(has_post_thumbnail()):
                    $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_id()))
                ?>
            <a href="<?php the_permalink(); ?>">
            <div class="standard-featured background-image " style="background-image: url( <?php echo $featured_image ;  ?>)"></div>
            </a>

            <?php endif; ?>
            </div>

            <div class="entry-summary">
                <?php	echo wp_trim_words( get_the_content(), 75 );

                ?>
            </div>

            <div class="button-container text-center">
                <a href="<?php the_permalink(); ?>" class="btn btn-alaa"><?php _e( 'Read More' ); ?></a>
            </div>
        </div> <!--.entry-content-->

        <footer class="entry-footer">
            <?php echo alaa_post_footer(); ?>

        </footer>
    </article>