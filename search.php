<?php
/**
 * The template for displaying search results pages.
 *
 * @package alaa
 */

get_header(); ?>

	<div class="content-area col-md-9">
		<main class="post-wrap" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h3><?php printf( __( 'Search Results for: %s', 'alaa' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <div class="col-sm-3 ">
        <div class="side-bar">
            <?php dynamic_sidebar('alaa-right-sidebar'); ?>
        </div>
    </div>

<div class="clear"></div>

<?php get_footer(); ?>