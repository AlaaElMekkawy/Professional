<?php
/*
 * slider
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('alaa-formated-gallery'); ?>>
    <header class="entry-header text-center ">

        <?php
        if(alaa_get_attachment()):
            $attachments = alaa_get_attachment(5);
            ?>

            <div id="post-gallery-<?php the_ID(); ?>" class="carousel slide" data-ride="carousel">


                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <?php
                    $i = 0;
                    foreach ( $attachments as $attachment):
                        $active = ( $i == 0 ? ' active' : '' );

                        ?>

                        <div class="item<?php echo $active ; ?> background-image standard-featured" style="background-image: url( <?php echo wp_get_attachment_url($attachment->ID ); ?> );"></div>

                        <?php
                        $i++ ;

                    endforeach;  ?>

                </div>



                <!-- Controls -->
                <a class="left carousel-control" href="#post-gallery-<?php the_ID(); ?>" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#post-gallery-<?php the_ID(); ?>" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>





        <?php endif; ?>

        <?php the_title( '<h1 class="entry-title"><a href="' . esc_url(get_permalink()) .'" rel="bookmark">', '</a></h1>'); ?>

        <div class="entry-meta">
            <?php echo alaa_post_meta(); ?>
        </div>
    </header>
    <!--.entry-content-->


</article>
