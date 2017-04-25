<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/26/2017
 * Time: 4:06 PM
 */

?>


<!-- newest blog-->
<div class="front-blog al-section">
    <div class="container">

                <header class="text-center section-header">
                    <h2 class="entry-title section-title"><?php esc_html_e( 'Recent Blog', 'alaa' ); ?></h2>
                </header>


        <div class="row posts">

        <?php
                $args = array(
                    'posts_per_page'      => 3,
                    'post__in'            => get_option( 'sticky_posts' ),
                    'ignore_sticky_posts' => 1,
                    'orderby'        => 'modified',

                );
                $postplog = new WP_Query($args);
                if (  $postplog->have_posts() ) :
                    while (  $postplog->have_posts() ) :  $postplog->the_post();?>

                        <div class="col-md-4 col-sm-6 post-content">
                            <!-- featured image-->
                                    <div class="entry-figure">
                                        <?php if(has_post_thumbnail()):
                                            $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_id())) ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="standard-featured background-image " style="background-image: url( <?php echo $featured_image ;  ?>)"></div></a>
                                        <?php endif; ?>
                                    </div>

                            <!-- Post header-->
                                <div class="entry-header ">
                                    <?php the_title( '<h3 class="entry-title text-left"><a href="' . esc_url(get_permalink()) .'" rel="bookmark">', '</a></h3>'); ?></div>


                            <!--Post summery or content-->
                                <div class="entry-summary ">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="clear"></div>

                            <!-- Post Button-->
                                <div class="  button-container text-center">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-alaa"><?php _e( 'Read More' ); ?></a>
                                </div>

                            </div>


                    <?php endwhile; ?>


                    <div class="alaa-pagination"><?php echo paginate_links(); ?></div>
                <?php else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>
        </div>

    </div><!--.container-->
</div> <!--.front-blog-->

<?php wp_reset_postdata(); ?>
