<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 2/22/2017
 * Time: 10:48 AM
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('alaa-aside-format'); ?>>
    <header class="entry-header text-center">

        <?php get_template_part( 'template-parts/postmeta', '' ); ?>

    </header>

    <div class="alaa-post-wrapper">

        <div class="entry-summary lead">

            <?php	the_content() ; ?> <div class="text-right seemore"><a href="<?php the_permalink()  ?>"><small>  See Post... &raquo;</small></a></div>
        </div>


    </div> <!--.entry-content-->

    <footer class="entry-footer">
        <?php echo alaa_post_footer(); ?>



    </footer>
</article>