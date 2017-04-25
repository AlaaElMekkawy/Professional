<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 2/22/2017
 * Time: 10:48 AM
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('alaa-single-post-format'); ?>>
    <header class="entry-header text-center">
        <?php the_title( '<h2 class="entry-title">', '</h2>'); ?>

        <?php get_template_part( 'template-parts/postmeta', '' ); ?>

    </header>

    <div class="alaa-post-wrapper">
        <div class="entry-figure" >
        <?php if(has_post_thumbnail()):
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_id()));
            ?>
                <div class="standard-featured"><img class=" img-responsive" src="<?php echo $featured_image ;  ?>" ></div>

        <?php endif; ?>
        </div>

        <div class="entry-content " <?php if(get_post_format() == 'aside' && ! has_post_thumbnail()){ echo 'style=" margin:10px auto; background:#eee;"';} ?>>
            <?php the_title( '<h4 class="entry-title text-center">', '</h4>'); ?>
            <?php the_content(); ?>
            <?php


            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alaa' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>




    </div> <!--.entry-content-->

    <footer class="entry-footer">
        <?php echo alaa_post_footer(); ?>

    </footer>

    <div class="post-navigation row">
        <div class="post-previous col-md-6"><?php previous_post_link( '%link', '<span class="meta-nav">' . __( 'Previous:', 'alaa' ) . '</span> %title' ); ?></div>
        <div class="post-next col-md-6"><?php next_post_link( '%link', '<span class="meta-nav">' . __( 'Next:', 'alaa' ) . '</span> %title' ); ?></div>
    </div>


    <?php get_template_part( 'template-parts/template', 'postauthor' ); ?>

</article>