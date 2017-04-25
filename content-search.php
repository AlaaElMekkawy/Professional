
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        echo wp_trim_words( get_the_content(), 70 );
        ?>
    </div><!-- .entry-content -->

    <div class="entry-readmore">
        <a href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'alaa' ); ?></a>
    </div>

</article><!-- #post-## -->

